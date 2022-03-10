<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>Beton-Firma Budowlana z Katowic</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img class="logo" src="img/index_img/nazwafirmy.png" alt=""></a>
            <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="index.php">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="products.php">Produkty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active custom-link" aria-current="page" href="aboutus.php">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header></header>


    <!-- Główny kontent -->
    <section class="container-fluid">
        <div class="row m-5 p-5 d-flex justify-content-center align-items-center">
            <p>Firma "BETON" została założona w 2015 roku przez trójkę absolwentów architektury z Politechniki Śląskiej. Na początku była jedynie biurem architektonicznym,
                jednak w niedługim czasie, dzieki pasji założycieli do budownictwa, została przekształcona w firmę budowlaną.
            </p>
        </div>
        <div class="row m-5 main-content-div">
            <div class="col-7">
                <img src="img/aboutus_img/content_img/zespol2.jpg" alt="" class="img-responsive w-100">
            </div>
            <div class="col-12 col-xl-5 img-description">
                <h5>Zespół</h5>
                <p>Zespół, w którego skład początkowo wchodziło 3 architektów obecnie liczy ponad 150 pracowników z różnorodnymi kwalifikacjami. Właśnie ta różnorodność
                    daje nam elastyczność w tworzeniu projektów do wielorakich zastosowań.
                </p>
            </div>
        </div>
        <div class="row m-5 main-content-div">
            <div class="col-12 col-xl-5 img-description">
                <h5>Działalność charytatywna</h5>
                <p>Firma aktywnie angażuje się w różne akcje charytatywne i wspiera takie organizacje jak: Polski Czerwony Krzyż, Polska Akcje Humanitarną, czy Szlachetna paczka </p>
            </div>
            <div class="col-7">
                <img src="img/aboutus_img/content_img/dzialalnosc_charytatywna.png" alt="" class="img-responsive w-100">
            </div>
        </div>
        <div class="row m-5 main-content-div">
            <div class="col-7">
                <img src="img/aboutus_img/content_img/wycieczka.jpg" alt="" class="img-responsive w-100">
            </div>
            <div class="col-12 col-xl-5 img-description">
                <h5>Nie tylko praca!</h5>
                <p>Firma organizuje liczne spotkania integracyjne takie jak: ogniska, paintball, czy wycieczki górskie. Dzięki takim wydarzeniom, komunikacja
                    między pracownikami na różnych szczeblach jest wręcz doskonała.
                </p>
            </div>
        </div>
        <div class="row m-5 main-content-div">
            <div class="col-12 col-xl-5 img-description">
                <h5>Współpraca z uczelniami wyższymi</h5>
                <p>Dzięki współpracy z uczelniami wyższymi, jesteśmy w stanie zatrudniać kandydatów z najlepszymi kwalifakcjami, a Ci z
                    kolei pracując z bardziej doświadczonymi kolegami, stają się specjalistami w swoich dziedzinach.
                </p>
            </div>
            <div class="col-7 car-disp">
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="img/aboutus_img/content_img/polsl.png" class="w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/aboutus_img/content_img/ue.png" class="w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/aboutus_img/content_img/us.png" class="w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stopka -->
    <footer>
        <div class="foot mx-5 mt-5 pt-4">
            <div class="foot-icons">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a>
                <a href="https://pl.linkedin.com/"><i class="fab fa-linkedin"></i></a>

            </div>
        </div>
    </footer>

    <script src="bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/aboutus_script.js"></script>
</body>

</html>