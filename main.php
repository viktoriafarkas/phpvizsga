<?php
require_once 'nav.php';
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="./reset.css">
        <link rel="stylesheet" href="./main-stlye.css">
        <link rel="stylesheet" href="./grid-2.css">
        <title>Bejelentkezés</title>
    </head>
    <body>

        <section id="bg">
            <h1>Élményvezetés.hu</h1>
            <p>Érezted már a pulzusodat száguldás közben? Szeretnéd megtapasztalni az autóversenyzők izgalmas világát? Vezess sportautót a Hungaroringen, és élvezd az élményt, amit csak a sebesség és az adrenalin hozhat!</p>
        </section>

        <section id="sec-2" class="container my-5">
            <h2 class="text-center m-4 mb-5" id="termekek">Tekintse meg autóinkat...</h2>
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <div class="card card h-100 bg-light shadow-lg">
                        <div class="row d-flex justify-content-center" >
                            <img src="img/icons8-sedan-100.png" class="card-img-top w-25" alt="Sedan">
                        </div>
                        <div class="card-body d-flex flex-column " >
                            <h5 class="card-title pb-4 text-center text-warning ">...kategóriák szerint</h5>
                            <p class="text-center  text-success">Az élményvezetésünk kínálatában szereplő sportautók között számos típus megtalálható, többek között japán, amerikai és német autók is. Ha szeretnéd, hogy könnyedén megtaláld az általad kedvelt típust, akkor használd a "Tovább" gombot, amely lehetővé teszi, hogy az autók fajtája szerint szűrj a kínálatunkban.</p>
                            <p class="p-auto text-center text-warning "><b>foglaláshoz kérjük az alábbi telefonszámon érdeklődj: <br> +36-1-234-567</b></p>
                            <a href="./main-cars.php"><button class="btn btn-warning mt-auto d-grid gap-2 col-6 mx-auto">Tovább</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <div class="card card h-100 bg-light shadow-lg">
                        <div class="row d-flex justify-content-center" >
                            <img src="img/icons8-calendar-100.png" class="card-img-top w-25" alt="Calendar">
                        </div>
                        <div class="card-body d-flex flex-column" >
                            <h5 class="card-title pb-4 text-center text-warning ">...dátum alapján</h5>
                            <p class="text-center  text-success">Az élményvezetéseink több időpontban is elérhetőek, hogy minél több látogatónk számára lehetővé tegyük az élmény megtapasztalását. Ha szeretnéd, hogy csak az elérhető időpontokat láthasd, válaszd a "Dátum szerinti szűrés" lehetőséget, majd egyszerűen válaszd ki a számodra megfelelő dátumot az elérhető lehetőségeink közül.</p>
                            <p class="p-auto text-center text-warning "><b>foglaláshoz kérjük az alábbi telefonszámon érdeklődj: <br> +36-1-234-567</b></p>                            
                            <a href="./main-date.php"><button class="btn btn-warning mt-auto d-grid gap-2 col-6 mx-auto">Tovább</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sec-3">
            <div class="column-5 no-margin">
                <div>
                    <img src="./img/car-1-opt-bw.png" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-2-opt-bw.png" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-3-opt-bw.png" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-4-opt-bw.png" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-opt-5-bw.jpg" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-opt-6-bw.jpg" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-opt-7-bw.jpg" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-opt-10-bw.jpg" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-opt-9-bw.jpg" alt="Portfólió">
                </div>
                <div>
                    <img src="./img/car-opt-8-bw.jpg" alt="Portfólió">
                </div>
            </div>
        </section> 

        <section id="rolunk" class=" mt-4 mb-1 bg-warning pb-1">
            <div  class="container">
                <h2 class="text-center mt-5 mb-1 pt-5">Rólunk</h2>
                <div class="row">
                    <div id="driver" class="col-lg-12 col-xl-6 p-4 mb-5 text-center">
                        <img class=" w-75 img-fluid" src="./img/driver-opt.jpg" alt="viz">
                    </div>
                    <div class="col-lg-12 col-xl-6 ps-5 mt-5">
                        <p>Üdvözöljük az <b>Élményvezetés.hu </b>oldalán, ahol a legjobb autós élményekkel várjuk az autósport rajongóit! Cégünk a <b>Hungaroringen</b> szervez sportautós élményvezetéseket japán, amerikai, német és egyéb autókkal.</p>
                        <p>Célunk, hogy olyan élményeket nyújtsunk, amelyeket az emberek sosem felejtenek el. <b>Tapasztalt és profi pilótáink segítségével</b> biztosítjuk, hogy mindenki <b>magabiztosan és biztonságosan</b> tudjon autózni az egyedülálló környezetben, amelyet a Hungaroring biztosít.</p>
                        <p>Büszkék vagyunk arra, hogy olyan autók közül válogathatnak a vendégeink, mint a <b>Lamborghini, Ferrari, Porsche és BMW</b>. Minden autónk tökéletesen karbantartott és szakszerűen felkészített, így mindenki számára biztosítjuk a kivételes élményt.</p>
                        <p>Az Élményvezetés.hu csapata mindenre odafigyel, hogy a vendégeinknek a legjobb élményt nyújtsuk. <b>Várjuk Önöket a Hungaroringen</b>, hogy átéljék az autósport varázsát és élvezzék az autózás élményét! </p>
                    </div>
                </div>
            </div>
        </section>

            <section id="hero" class="container carousel-sec">
                <h1 class="text-center pt-5 own-cim text-warning">Pálya</h1>
                
                <div id="carouselExampleIndicators" class="mx-auto carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner mx-auto">
                        <div class="carousel-item active">
                            <img src="./img/track-opt-5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/track-opt-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/track-opt-3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/track-opt-4.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

        <section id="top">
            <button type="button" class="btn" id="btn-back-to-top"> <i class="fas fa-arrow-up"></i></button>
        </section>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="./top.js" ></script>
    </body>
</html>

<?php
echo '<div class="foot">';
require_once 'footer.php';
echo '</div>';
?>