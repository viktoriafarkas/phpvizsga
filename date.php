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

  $sql = "SELECT cars.name AS car_name, cars.desc AS car_desc, cars.price AS car_price, active.date AS active_date, active.isactive AS isactive
          FROM active 
          JOIN cars ON active.cars_car_id = cars.car_id
          JOIN cartype ON cars.cartype_cartype_id = cartype.cartype_id 
          ORDER BY active_date, cars.name";
  $result = mysqli_query($conn, $sql);

  $current_date = '';

  echo "<table class='table table-hover'>";
  while ($row = mysqli_fetch_assoc($result)) {
    $date = $row["active_date"];
    $car_name = $row["car_name"];
    $car_desc = $row["car_desc"];
    $car_price = $row["car_price"];
    $is_active = $row["isactive"];

    if ($current_date != $date) {
      echo "<tr><td class='text-center' colspan='5'><h2>$date</h2></td></tr>";
      echo "<tr><th class='bg-warning'>Autó neve</th><th class='bg-warning'>Leírás</th><th class='bg-warning text-center'>Ár</th><th class='bg-warning text-center''>Elérhető-e</th></tr>";
      $current_date = $date;
    }

    echo "<tr>";
    echo "<td class='own-td-1'><b>$car_name</b></td>";
    echo "<td class='own-td-2'>$car_desc</td>";
    echo "<td class='text-center'><b>$car_price Ft</b></td>";
    echo "<td class='text-center'>";
    if ($is_active == 1) {
      echo "<img src='./img/pipa.png' alt='Aktív'>";
    } else {
      echo "<img src='./img/x.png'>";
    }
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";

  mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./main-style.css">
    <title>Dátum</title>
</head>
<body >
</body>
</html>