<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Beton-Firma Budowlana z Katowic</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img class="logo" src="img/index_img/nazwafirmy.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link custom-link" href="aboutus.php">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link active" aria-current="page" href="contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header></header>

    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-xl-10">
                <form class="infoBox1">
                    <h5>Masz do nas pytanie lub chcesz dowiedzieć się więcej o
                        naszych produktach? Wystarczy wypełnić poniższy formularz, a my skontaktujemy się z Tobą.</h5>
                    <div class="row mb-4">
                        <div class="col">
                            <input id="name" placeholder="Imię" class="form-control">
                        </div>
                        <div class="col">
                            <input id="email" placeholder="Twój email" class="form-control">
                        </div>
                    </div>

                    <div class="mb-4">
                        <input id="subject" placeholder="Temat" class="form-control">
                    </div>

                    <div class="mb-4">
                        <textarea class="form-control" id="body" placeholder="Tekst wiadomości"></textarea>
                    </div>

                    <input type="button" onclick="sendEmail()" value="Wyślij wiadomość" class="btn btn-primary sendButton">
                </form>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col-xl-10">
                    <section class="infoBox2">
                        <div class="row mb-4">
                            <div class="col">
                                <h5>Dane kontaktowe:</h5>
                                <p>Telefon: +48123456789</p>
                                <p>E-mail: betonfirmagorzow@gmail.com</p>
                                <p>NIP: 832-130-24-54</p>
                            </div>
                            <div class="col">
                                <h5>Adres:</h5>
                                <p>ul. Przemysłowa 23,</p>
                                <p>Katowice,</p>
                                <p>Kod pocztowy: 40-003
                                <p>
                            </div>
                        </div>
                        <br>
                        <h5>Beton Gorzów sp. z.o.o.</h5>
                    </section>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer>
            <div class="foot mx-5 mt-5 pt-4">
                <div class="foot-icons">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a>
                    <a href="https://pl.linkedin.com/"><i class="fab fa-linkedin"></i></a>

                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/contactMail_script.js"></script>
        <script src="js/contact_script.js"></script>
</body>

</html>