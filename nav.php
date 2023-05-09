<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="./nav-style.css">
        <title>Bejelentkezés</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg bg-warning ">
            <div class="container-fluid">
                <a class="navbar-brand" href="./main.php"><img src="img/icons8-race-96.png" height="50" alt="Élményvezetés logo"></a>
                <a class="navbar-brand" href="./main.php"><p>Élményvezetés</p></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav  justify-content-end flex-grow-1">
                  <li class="nav-item">
                    <a class="nav-link active fooldal" aria-current="page" href="./main.php">Főoldal</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Autók
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./main-cars.php">Kategóriák szerint</a></li>
                      <li><a class="dropdown-item" href="./main-date.php">Dátum szerint</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link admin" href="./login.php">Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>