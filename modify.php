<?php
    $servername = "localhost";
    $adminname = "root";
    $password = "";
    $dbname = "vezetes";
    
    $id = $_GET['modifyid'];


    // Kapcsolat létrehozása
    $conn = mysqli_connect($servername, $adminname, $password, $dbname);
    // Kapcsolat ellenőrzése
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    } 

    $sql = "SELECT * FROM cars WHERE car_id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $car_name = $row["name"];
    $car_desc = $row["desc"];
    $car_price = $row["price"];
    $cartype_cartype_id = $row["cartype_cartype_id"];

  
    if(isset($_POST['insert-btn-4'])) {
      $car_name = $_POST['name'];
      $car_desc = $_POST['desc'];
      $car_price = $_POST["price"];
      $cartype_cartype_id = $_POST["cartype_cartype_id"];
  
  
    // Lekérdezés a kategóriák és autók adataira
    $sql = "UPDATE cars SET name='$car_name', `desc`='$car_desc', price='$car_price', cartype_cartype_id='$cartype_cartype_id' WHERE car_id='$id'";        $result = mysqli_query($conn, $sql);
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

            <div class="row mb-3">
                <label for="text" class="col-sm-3 col-form-label">Autó márkája és típusa</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name" value="<?php echo  $car_name;?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="text" class="col-sm-3 col-form-label">Autó leírása</label>
                <div class="col-sm-4">
                <textarea type="text" class="form-control" name="desc"><?php echo $car_desc;?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="text" class="col-sm-3 col-form-label">Ár (Ft)</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" name="price" value="<?php echo  $car_price;?>">
                </div>
            </div>

            <div class=" row mb-5">
            <label for="text"><b>Kategória</b></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cartype_cartype_id" id="japan" value="1"<?php if ($cartype_cartype_id == '1') { echo 'checked'; } ?>>
                    <label class="form-check-label" for="japan">
                    Japán
                    </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="cartype_cartype_id" id="nemet" value="2"<?php if ($cartype_cartype_id == '2') { echo 'checked'; } ?>>
                    <label class="form-check-label" for="nemet">
                    Német
                    </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="cartype_cartype_id" id="amerikai" value="3"<?php if ($cartype_cartype_id == '3') { echo 'checked'; } ?>>
                    <label class="form-check-label" for="amerikai">
                    Amerikai
                    </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="cartype_cartype_id" id="retro" value="4"<?php if ($cartype_cartype_id == '4') { echo 'checked'; } ?>>
                    <label class="form-check-label" for="retro">
                    Retró
                    </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="cartype_cartype_id" id="formula" value="5"<?php if ($cartype_cartype_id == '5') { echo 'checked'; } ?>>
                    <label class="form-check-label" for="formula">
                    Formula-Series
                    </label>
            </div>

            <div class=" form-check  mb-4">
                <input class="form-check-input" type="radio" name="cartype_cartype_id" id="olasz" value="6"<?php if ($cartype_cartype_id == '6') { echo 'checked'; } ?>>
                    <label class="form-check-label" for="olasz">
                    Olasz
                    </label>
            </div>

            <div class=" row ">
                <div class=" col-sm-4 row">
                </div>
                    <div class=" col-sm-10 row radios">
                        <div id="add" class="col-sm-6 order-last radios">
                    <button name="insert-btn-4" type="submit" class="btn btn-warning">Módosítás</button>
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