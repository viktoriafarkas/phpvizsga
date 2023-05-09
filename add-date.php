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

    if(isset($_POST['insert-btn-3'])) {
        $date = $_POST['date'];
        $is_active = $_POST['isactive'];
        $cars_car_id = $_POST['cars_car_id'];

        $insert_q = mysqli_prepare($conn, "INSERT INTO active (date, isactive, cars_car_id) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($insert_q , "sii", $date, $is_active, $car_id);

        foreach($cars_car_id as $car_id){
            mysqli_stmt_execute($insert_q );
        }

        if ($insert_q) {
            ?>
            
            <script type="text/javascript">
                alert('Sikeres hozzáadás');
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
        <h2>Új dátum hozzáadása</h2>
        <form action="" method="POST">

            <div class="row mb-3">
                <label for="text" class="col-sm-3 col-form-label">Dátum</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="date" value="" required>
                </div>
            </div>

            <div class=" row mb-5">
                <label for="text"><b>Elérhető?</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isactive" id="igen" value="1">
                        <label class="form-check-label" for="igen">
                        Igen
                        </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="isactive" id="nem" value="0">
                        <label class="form-check-label" for="nem">
                        Nem
                        </label>
                </div>
            </div>

            <div class="row mb-3">
                <label for="text"><b>Autó fajta (többet is választhat)</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="2" id="auto-1">
                    <label class="form-check-label" for="auto-1">
                    Ferrari 488 GTB
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="3" id="auto-2">
                    <label class="form-check-label" for="auto-2">
                    Ferrari 458 Italia
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="4" id="auto-3">
                    <label class="form-check-label" for="auto-3">
                    Ferrari F430
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="5" id="auto-4">
                    <label class="form-check-label" for="auto-4">
                    Lamborghini Huracán
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="6" id="auto-5">
                    <label class="form-check-label" for="auto-5">
                    Lamborghini Gallardo
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="7" id="auto-6">
                    <label class="form-check-label" for="auto-6">
                    Porsche 911 Carrera
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="8" id="auto-7">
                    <label class="form-check-label" for="auto-7">
                    Porsche 911 Turbo S
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="9" id="auto-8">
                    <label class="form-check-label" for="auto-8">
                    BMW E36 Rally
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="10" id="auto-9">
                    <label class="form-check-label" for="auto-9">
                    BMW M3
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="11" id="auto-10">
                    <label class="form-check-label" for="auto-10">
                    BMW E46 Drift
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="12" id="auto-11">
                    <label class="form-check-label" for="auto-11">
                    Skoda 120
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="13" id="auto-12">
                    <label class="form-check-label" for="auto-12">
                    Polski Fiat
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="14" id="auto-13">
                    <label class="form-check-label" for="auto-13">
                    Wartburg
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="15" id="auto-14">
                    <label class="form-check-label" for="auto-14">
                    Ford Mustang GT Coyotte
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="16" id="auto-15">
                    <label class="form-check-label" for="auto-15">
                    Ford Mustang GT
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="17" id="auto-16">
                    <label class="form-check-label" for="auto-16">
                    Ford Mustang Roush
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="18" id="auto-17">
                    <label class="form-check-label" for="auto-17">
                    Ford Mustang SVO Shelby GT500
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="19" id="auto-18">
                    <label class="form-check-label" for="auto-18">
                    Dodge Charger Super Bee
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="20" id="auto-19">
                    <label class="form-check-label" for="auto-19">
                    Dodge Viper
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="21" id="auto-20">
                    <label class="form-check-label" for="auto-20">
                    Chevrolette Corvette C7
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="22" id="auto-21">
                    <label class="form-check-label" for="auto-21">
                    Tesla Model S Plaid
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="23" id="auto-22">
                    <label class="form-check-label" for="auto-22">
                    Chevrolette Corvette C8
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="24" id="auto-23">
                    <label class="form-check-label" for="auto-23">
                    Nissan GT-R
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="25" id="auto-24">
                    <label class="form-check-label" for="auto-24">
                    Subaru Imperza WRX
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="26" id="auto-25">
                    <label class="form-check-label" for="auto-25">
                    Subaru Imperza STI 555
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="27" id="auto-26">
                    <label class="form-check-label" for="auto-26">
                    Mitsubishi Lancer EVO IX
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="28" id="auto-27">
                    <label class="form-check-label" for="auto-27">
                    Kétüléses Forma Renault Versenyautó
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="29" id="auto-28">
                    <label class="form-check-label" for="auto-28">
                    Együléses Forma Renault Versenyautó
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="30" id="auto-29">
                    <label class="form-check-label" for="auto-29">
                    Mercedes AMG GT S
                    </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="cars_car_id[]" value="31" id="auto-30">
                    <label class="form-check-label" for="auto-30">
                    Együléses Forma1 Showcar
                    </label>
                </div>
            </div>

            <div class=" row ">
                <div class=" col-sm-4 row">
                </div>
                    <div class=" col-sm-10 row radios">
                        <div id="add" class="col-sm-6 order-last radios">
                    <button name="insert-btn-3" type="submit" class="btn btn-warning">Hozzáad</button>
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