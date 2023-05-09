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
if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

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

    $sql = "DELETE FROM cars WHERE car_id=$id";
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
