<?php require_once 'nav.php'; ?>

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
<body id="main-date">
    
    <div class="container">
        <h1 class='text-center mt-4'>Autók dátum szerint</h1>
        <table class="table table-striped">
            <tbody>
                <?php require_once 'date.php'; ?>
            </tbody>
        </table>
    </div>
    
    <section id="top">
        <button type="button" class="btn" id="btn-back-to-top"> <i class="fas fa-arrow-up"></i>
        </button>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./top.js" ></script>

</body>
</html>

<?php require_once 'footer.php'; ?>