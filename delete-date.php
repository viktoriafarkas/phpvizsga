<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./form-style.css">
    <title>Új hozzáadása</title>
</head>
<body>
</body>
</html>

<?php
if(isset($_POST['datedeleteid'])) {
    $id = $_POST['datedeleteid'];

    $servername = "localhost";
    $adminname = "root";
    $password = "";
    $dbname = "vezetes"; 

    $dateid = isset($_POST['datedeleteid']) ? $_POST['datedeleteid'] : null;
  
    // Kapcsolat létrehozása
    $conn = mysqli_connect($servername, $adminname, $password, $dbname);
    // Kapcsolat ellenőrzése
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    } 

    $sql = "SELECT cars.car_id AS car_id, cars.name AS car_name, cars.desc AS car_desc, cars.price AS car_price, active.date AS active_date, active.isactive AS isactive
    FROM active 
    JOIN cars ON active.cars_car_id = cars.car_id
    JOIN cartype ON cars.cartype_cartype_id = cartype.cartype_id WHERE cars.car_id = $dateid";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $date = $row["active_date"];
        }
    } else {
        echo "Nincs eredmény.";
    }
  
    $sql = "DELETE FROM active WHERE cars_car_id = $dateid AND active.date = '$date'";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<div class='m-5'>";
            echo "<div class='mt-2'> <h1>Sikeres törlés</h1></div></br>";
            echo "<td class='text-center'><a href='main-admin.php'><button type='button' class='btn btn-dark'>Vissza</button><a/></td>";
            echo "</div>";
        }else{
            die(mysqli_error($con));
        }

    mysqli_close($conn);

}
exit;
?>
