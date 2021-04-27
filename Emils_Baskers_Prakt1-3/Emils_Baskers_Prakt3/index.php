<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alūksnes Projekti</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body class="antialiased">
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="logo/logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#slides">Sākums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#welcome">Par mums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Pakalpojumi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Cenrādis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Kontakti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="logo/ap1.jpg" alt="First slide">
            <div class="carousel-caption">
                <h3 class="display-5">Mērniecība, ģeodēzija, kartogrāfija, topogrāfija</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="logo/ap2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="logo/ap3.jpg" alt="Third slide">
        </div>
    </div>
</div>

<!--- Welcome Section -->
<div id="welcome" class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Par mums</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Alūksnes projekti nodarbojas ar mērniecību, ģeodēziju, kartogrāfiju un topogrāfiju. Ir pieredze gan privātpersonu, gan pašvaldības, gan valsts līmeņa projektos un pasūtījumos.</p>
        </div>
    </div>
</div>

<!--- Services -->
<div id="services" class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Pakalpojumi</h1>
        </div>
        <hr>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <p class="lead">Mērniecība</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <p class="lead">Ģeodēzija</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <p class="lead">Kartogrāfija</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <p class="lead">Topogrāfija</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>

<!--- Pricing -->
<div id="pricing" class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Cenrādis</h1>
        </div>
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pakalpojums</th>
                <th scope="col">Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Zemes kadastrālā uzmērīšana</td>
                <td>---</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Topogrāfiskā uzmērīšana</td>
                <td>---</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Izpildmērījumi</td>
                <td>---</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Cits</td>
                <td>---</td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr class="my-4">
</div>

<!--- Connect -->
<div id="contacts" class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Kontakti</h2>
        </div>
        <div class="col-6">
            <i class="fa fa-phone"></i>
            <p class="lead">555-555-555</p>
        </div>
        <div class="col-6">
            <i class="fa fa-envelope"></i>
            <p class="lead">alpr@alpr.lv</p>
        </div>
    </div>
</div>

<!-- google maps -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1518.7080867242723!2d27.037618668436437!3d57.43101804350759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ea684543642483%3A0x9b2927fed67f2124!2zUGlscyBpZWxhIDE2LCBBbMWra3NuZSwgQWzFq2tzbmVzIHBpbHPEk3RhLCBMVi00MzAx!5e0!3m2!1sen!2slv!4v1602879615673!5m2!1sen!2slv"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8662.047004057567!2d27.2655919!3d57.1283125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b42c0e798a6aab5!2sAl%C5%ABksnes%20projekti%2C%20Fili%C4%81le%20Balvos!5e0!3m2!1sen!2slv!4v1602880075620!5m2!1sen!2slv"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </div>
</div>

<!-- submit form -->
<div id="contact-form" class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <p class="lead">Atstājiet savu kontaktinformāciju un mēs ar jums sazināsimies</p>
        </div>
        <div class="col-12">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Vārds:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="surname">Uzvārds:</label>
                <input type="text" class="form-control" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="tel-nr">Telefona numurs:</label>
                <input type="text" class="form-control" id="tel-nr" name="tel-nr" required>
            </div>
            <div class="form-group">
                <label for="task">Pakalpojuma veids:</label>
                <select name="task" class="form-control" id="task" required>
                    <option value="cadastre">Zemes kadastrālā uzmērīšana</option>
                    <option value="topo">Topogrāfiskā uzmērīšana</option>
                    <option value="executive">Izpildmērījumi</option>
                    <option value="other">Cits</option>
                </select>
            </div>
            <button  type="submit" class="btn btn-primary">Iesniegt</button>
        </form>
    </div>
    </div>
</div>

<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="logo/logo.jpg">
                <hr class="light">
                <p>555-555-555</p>
                <p>alpr@alpr.lv</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Mūsu darba laiki</h5>
                <hr class="light">
                <p>Darba dienās: 9.00 - 17.00</p>
                <p>Sestdienās: 9.00 - 14.00</p>
                <p>Svētdienās: slēgts</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Pilsētas</h5>
                <hr class="light">
                <p>Alūksne, LV-4301</p>
                <p>Balvi, LV-4501</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>alprojekti.lv</h5>

            </div>
        </div>
    </div>
</footer>

</body>
</html>
