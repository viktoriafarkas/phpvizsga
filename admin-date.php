<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./main-admin-style.css">
    <title>Autók</title>
</head>
<body>
</body>
</html>



<?php
  $servername = "localhost";
  $adminname = "root";
  $password = "";
  $dbname = "vezetes"; 

  // Kapcsolat létrehozása
  $conn = mysqli_connect($servername, $adminname, $password, $dbname);
  // Kapcsolat ellenőrzése
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } 


  $sql = "SELECT cars.car_id AS car_id, cars.name AS car_name, cars.desc AS car_desc, cars.price AS car_price, active.date AS active_date, active.isactive AS isactive
  FROM active 
  JOIN cars ON active.cars_car_id = cars.car_id
  JOIN cartype ON cars.cartype_cartype_id = cartype.cartype_id 
  ORDER BY active_date, cars.name";
  $result = mysqli_query($conn, $sql);
  
  $current_date = '';

  echo "<div class='center-box'>";
  echo "<td class='text-center'><a href='./add-date.php'><button type='button' class='btn btn-dark'>Új hozzáadása</button></a></td>";
  echo "<table class='table table-hover'>";
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["car_id"];
    $date = $row["active_date"];
    $car_name = $row["car_name"];
    $car_desc = $row["car_desc"];
    $car_price = $row["car_price"];
    $is_active = $row["isactive"];

    if ($current_date != $date) {
      echo "<tr><td class='text-center' colspan='7'><h2>$date</h2></td></tr>";
      echo "<tr><th class='bg-warning'>Autó ID</th><th class='bg-warning'>Autó neve</th><th class='bg-warning'>Leírás</th><th class='bg-warning text-center'>Ár</th><th class='bg-warning'>Elérhető-e</th><th class='bg-warning text-center'>Szerkesztés</th><th class='bg-warning text-center'>Törlés</th></tr>";
      $current_date = $date;
    }

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$car_name</td>";
    echo "<td class='text-center descr'>$car_desc</td>";
    echo "<td class='text-center'>$car_price Ft</td>";
    echo "<td class='text-center'>";
    if ($is_active == 1) {
      echo "<div class='text-center'>";
      echo "<img src='./img/icons8-done-48.png' alt='Aktív' width='40px'>";
      echo "</div>";
    } else {
      echo "<div class='text-center'>";
      echo "<img src='./img/x.png' width='40px'>";
      echo "</div>";
    }
    echo "<td class='text-center'><a href='modify-date.php?datemodifyid=".$id."'><button type='button' class='btn btn-warning'>Szerkesztés</button></a></td>";
    echo "<td class='text-center'><form method='post' action='delete-date.php'><input type='hidden' name='datedeleteid' value='".$id."'><button type='submit' class='btn btn-danger'>Törlés</button></form></td>";
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";

  mysqli_close($conn);
?>
