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

    if(isset($_POST['insert-btn-1'])) {
        $car_name = $_POST['name'];
        $car_desc = $_POST['desc'];
        $car_price = $_POST["price"];
        $cartype_cartype_id = $_POST["cartype_cartype_id"];


        $insert =  "INSERT INTO cars (name, `desc`, price, cartype_cartype_id)
                    VALUES ('$car_name', '$car_desc', '$car_price', '$cartype_cartype_id')";
        $insert_q = mysqli_query($conn, $insert);

        if ($insert_q) {
            ?>

            <script type="text/javascript">
                alert('Ön sikeresen hozzáadott egy új adatot! :)');
            </script>

            <?php
        } else {
            ?>
            
            <script type="text/javascript">
                alert('Nem siekrült, kérjük próbálja újra!');
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
    <body>
        <div class="container my-5">
            <h2>Új adat hozzáadása</h2>
            <form action="" method="POST">

                <div class="row mb-3">
                    <label for="text" class="col-sm-3 col-form-label">Autó márkája és típusa</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" placeholder="Pl. Ferrari 488 GTB" value="" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="text" class="col-sm-3 col-form-label">Autó leírása</label>
                    <div class="col-sm-4">
                        <textarea type="text" class="form-control" name="desc" placeholder="Autó leírása (nem kötelező)" value=""></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="text" class="col-sm-3 col-form-label">Ár (Ft)</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="price" placeholder="Pl. 12000" value="">
                    </div>
                </div>

                <div class=" row mb-5">
                <label for="text"><b>Kategória</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cartype_cartype_id" id="japan" value="1">
                        <label class="form-check-label" for="japan">
                            Japán
                        </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cartype_cartype_id" id="nemet" value="2">
                        <label class="form-check-label" for="nemet">
                            Német
                        </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cartype_cartype_id" id="amerikai" value="3">
                        <label class="form-check-label" for="amerikai">
                            Amerikai
                        </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cartype_cartype_id" id="retro" value="4">
                        <label class="form-check-label" for="retro">
                            Retró
                        </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cartype_cartype_id" id="formula" value="5">
                        <label class="form-check-label" for="formula">
                            Formula-Series
                        </label>
                </div>

                <div class=" form-check  mb-4">
                    <input class="form-check-input" type="radio" name="cartype_cartype_id" id="olasz" value="6">
                        <label class="form-check-label" for="olasz">
                            Olasz
                        </label>
                </div>


                <div class=" row mb-5">
                    <div class=" col-sm-4 row">
                    </div>
                        <div class=" col-sm-10 row radios">
                            <div id="add" class="col-sm-6 order-last radios">
                                <button name="insert-btn-1" type="submit" class="btn btn-warning">Hozzáad</button>
                            </div>
                            <div id="back" class="col-sm-2 order-first radios">
                                <a href="./main-admin.php"><input class="btn text-center me-5 btn-outline-dark" type="button" name="vissza" value="Vissza a főoldalra"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        

    </body>
</html>