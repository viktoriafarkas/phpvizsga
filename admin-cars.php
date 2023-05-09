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
<body id="admin-cars">
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

  $sql = "SELECT cars.*,cars.car_id AS car_id, cartype.name AS category_name FROM cars 
          JOIN cartype ON cars.cartype_cartype_id = cartype.cartype_id 
          ORDER BY cartype.name";
  $result = mysqli_query($conn, $sql);

  $current_category = '';

  echo "<div class='center-box'>";
  echo "<td class='text-center'><a href='./add-cars.php'><button type='button' class='btn btn-dark'>Új hozzáadása</button></a></td>";
  echo "<table class='table table-hover'>";
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["car_id"];
    $category = $row["category_name"];
    $car_name = $row["name"];
    $car_desc = $row["desc"];
    $car_price = $row["price"];

    if ($current_category != $category) {
      echo "<tr><td class='text-center' colspan='6'><h2>$category</h2></td></tr>";
      echo "<tr><th class='bg-warning'>Autó ID</th><th class='bg-warning'>Autó neve</th><th class='bg-warning text-center'>Leírás</th><th class='bg-warning text-center'>Ár</th><th class='bg-warning text-center'>Szerkesztés</th><th class='bg-warning text-center'>Törlés</th></tr>";
      $current_category = $category;
    }

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$car_name</td>";
    echo "<td class='text-center descr'>$car_desc</td>";
    echo "<td class='text-center'>$car_price Ft</td>";
    echo "<td class='text-center'><a href='modify.php?modifyid=".$id."'><button type='button' class='btn btn-warning'>Szerkesztés</button></a></td>";
    echo "<td class='text-center'><a href='delete.php?deleteid=".$id."'><button type='button' class='btn btn-danger'>Törlés</button></a></td>";
    echo "</tr>";
  }
    echo "</table>";
    echo "</div>";

    mysqli_close($conn);
?>

