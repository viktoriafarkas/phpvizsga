<?php
// LOAD PHP LIBRARY
require "admin.php";

// VERIFY ON FORM SUBMIT
if (count($_POST)!=0) {
    $_ADM->verify($_POST["email"],$_POST["password"]);
}

//REDIRECT TO MAIN ADMIN PAGE IF SIGNED IN
if (isset($_SESSION["admin"])) {
    header("Location:main-admin.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="./main-style.css">
        <title>Bejelentkezés</title>
    </head>
    <body id="login">
        
        <?php
            if ($_ADM->error!="") {echo "<div class='error'>".$_ADM->error."</div>";}
        ?>

        <div class="container col-6 bg-warning p-5 position-absolute top-50 start-50 translate-middle">
            <div class="row align-items-center">
                <form method="post">
                    <h1 class="text-center">Bejelentkezés</h1>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" required>
                        <div class="form-text">Szupertitkos minden :)</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jelszó</label>
                        <input class="form-control" type="password" name="password" required>
                    </div>

                    <div class="mb-3">
                        <input class="btn text-center btn-outline-light" type="submit" name="submit" value="Bejelentkezés">
                    </div>

                    <div class="mb-3">
                        <a href="./main.php"><input class="btn text-center btn-outline-light" type="button" name="vissza" value="Vissza a főoldalra"></a>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>