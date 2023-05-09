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

    if(isset($_POST['insert-btn-2'])) {
        $car_name = $_POST['name'];
        $car_desc = $_POST['desc'];

        $insert =  "INSERT INTO cartype (name, `desc`)
                    VALUES ('$car_name', '$car_desc')";
        $insert_q = mysqli_query($conn, $insert);

        if ($insert_q) {
            ?>
            
            <script type="text/javascript">
                alert('Ön sikeresen hozzáadott egy új kategóriát :)');
            </script>

            <?php
        } else {
            ?>
            
            <script type="text/javascript">
                alert('Nem sikerült új kategóriát hozzáadni. Kérem próbálja újra!');
            </script>
            
            <?php
        }
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
<body >

    <div class="container my-5">
        <h2>Új kategória hozzáadása</h2>
        <form action="" method="POST">

            <div class="row mb-3">
                <label for="text" class="col-sm-3 col-form-label">Kategória</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name" placeholder="Pl. német, olasz, sport, drift stb." value="" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="text" class="col-sm-3 col-form-label">Autó leírása</label>
                <div class="col-sm-4">
                    <textarea type="text" class="form-control" name="desc" placeholder="Kategória leírása (nem kötelező)" value=""></textarea>
                </div>
            </div>

            <div class=" row ">
                <div class=" col-sm-4 row">
                </div>
                    <div class=" col-sm-10 row radios">
                        <div id="add" class="col-sm-6 order-last radios">
                    <button name="insert-btn-2" type="submit" class="btn btn-warning">Hozzáad</button>
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