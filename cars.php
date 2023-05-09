<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./">
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

  $sql = "SELECT cars.*, cartype.name AS category_name FROM cars 
          JOIN cartype ON cars.cartype_cartype_id = cartype.cartype_id 
          ORDER BY cartype.name";
  $result = mysqli_query($conn, $sql);

$current_category = '';

echo "<table class='table table-hover'>";
while ($row = mysqli_fetch_assoc($result)) {
  $category = $row["category_name"];
  $car_name = $row["name"];
  $car_desc = $row["desc"];
  $car_price = $row["price"];

  if ($current_category != $category) {
    echo "<tr><td class='text-center' colspan='4'><h2>$category</h2></td></tr>";
    echo "<tr><th class='bg-warning'>Autó neve</th><th class='bg-warning text-center'>Leírás</th><th class='bg-warning text-center'>Ár</th></tr>";
    $current_category = $category;
  }

  echo "<tr>";
  echo "<td class='own-td-4'><b>$car_name</b></td>";
  echo "<td class='own-td-3'>$car_desc</td>";
  echo "<td class='text-center'><b>$car_price Ft</b></td>";
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