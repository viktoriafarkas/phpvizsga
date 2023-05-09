<?php

require "admin.php";

if (isset($_POST["out"])) {
    unset($_SESSION["admin"]);
}

if(!isset($_SESSION["admin"])) {
    header("Location: login.php");
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
        <link rel="stylesheet" href="./main-admin-style.css">
        <title>Admin Felület</title>
    </head>
    <body id="main-admin">

        <div class="bg-warning" id="pgside">
            <h3>ADMIN</h3>
            <a href="./main-admin.php">Főoldal</a> 

            <a href="#" onclick="loadPage('./admin-cars.php'); return false;">Autók</a>
            <a href="#" onclick="loadPage('./admin-date.php'); return false;">Dátum</a> 

            <form method="post">
                <input type="hidden" name="out" value="1">
                <input  class="btn text-center btn-outline-light" type="submit" value="Kijelentkezés">
            </form>
        </div>

        <div id="pgmain">
            <h3>Üdvözöljük az Élményvezetés.hu admin oldalán, <?php echo $_SESSION["admin"]["admin_email"]; ?>!</h3> 
        </div>

        <script src="admin-load-page.js"></script>
    </body>
</html>