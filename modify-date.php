<?php
    $servername = "localhost";
    $adminname = "root";
    $password = "";
    $dbname = "vezetes";
    
    $dateid = isset($_GET['datemodifyid']) ? $_GET['datemodifyid'] : null;

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
            $is_active = $row["isactive"];
            $car_name = $row["car_name"];
        }
    } else {
        echo "Nincs eredmény.";
    }
  
    if(isset($_POST['insert-btn-6'])) {

    $is_active = $_POST['isactive'];
  
    $sql = "UPDATE active SET isactive='$is_active' WHERE cars_car_id = $dateid AND active.date = '$date'";
    $result = mysqli_query($conn, $sql);

    if($result){

        ?>
        <script type="text/javascript">
            alert('Sikeres módosítás');
        </script>
        <?php

        }else{
            die(mysqli_error($con));
        }

    mysqli_close($conn);
}
?>


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

    <div class="container my-5">

        <h2>Módosítás</h2>

        <form action="" method="POST">
            <h3><?php echo  $car_name;?> </br><?php echo  $date;?> </h3></br>
            <div class=" row mb-5">
                <label for="text"><b>Elérhető?</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isactive" id="igen" value="1" <?php if ($is_active == '1') { echo 'checked'; } ?>>
                        <label class="form-check-label" for="igen">
                        Igen
                        </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isactive" id="nem" value="0" <?php if ($is_active == '0') { echo 'checked'; } ?>>
                        <label class="form-check-label" for="nem">
                        Nem
                        </label>
                </div>
            </div>
            <div class=" row ">
                <div class=" col-sm-4 row">
                </div>
                <div class=" col-sm-10 row radios">
                    <div id="add" class="col-sm-6 order-last radios">
                        <button name="insert-btn-6" type="submit" class="btn btn-warning">Módsítás</button>
                    </div>
                    <div id="back" class="col-sm-2 order-first radios ">
                        <a href="./main-admin.php"><input class=" btn  me-5 text-center btn-outline-dark" type="button" name="vissza" value="Vissza a főoldalra"></a>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
    

</body>
</html>