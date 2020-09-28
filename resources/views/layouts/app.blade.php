<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SC08.DE - Ihr Sportvereinheim im Rhein-Erft-Kreis">
    <meta name="keywords" content="sc08, fussball, seo, marketing, sport, hobby, verein">
    <meta name="robots" content="index, follow" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph Data -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="IMAGE_URL" />
    <meta property="og:site_name" content="SC08" />
    <meta property="og:title" content="SC08.DE - Ihr Sportvereinheim im Rhein-Erft-Kreis" />
    <meta property="og:description" content="Vereinbaren Sie noch heute einen Termin f�r eine Anmeldung!" />
    <meta property="og:url" content="https://www.lentz-it.de" />

    <!-- Eingebundene Bibliotheken -->
    <script type="text/javascript" src="https://www.fussball.de/static/layout/fbde2/egm//js/widget2.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/SC08/Sportplatz.jpg') }}" class="img-fluid">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('images/SC08/SC08_Logo.png') }}" style="height: 150px; width: 150px;" class="img-fluid">
                    </div>
                </div>
                <div class="row d-none d-lg-block">
                    <div class="col-12">
                        <h1 class="display-2 d-none d-lg-block">SC08 Elsdorf</h1>
                        <h1 class="display-2 d-none d-lg-block">Jetzt Anmelden!</h1>
                        <div class="d-none d-lg-block">
                            <a href="anmeldung#content" class="btn btn-outline-light btn-lg uppercase">Anmeldung</a>
                            <a type="#" class="btn btn-primary btn-lg">Mehr Informationen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/SC08/Sportplatz.jpg') }}">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('images/SC08/SC08_Logo.png') }}" style="height: 150px; width: 150px;" class="img-fluid">
                    </div>
                </div>
                <div class="row d-none d-lg-block">
                    <div class="col-12">
                        <h1 class="display-2">SC08 Elsdorf</h1>
                        <h3>Jetzt Anmelden!</h3>
                        <div class="d-none d-sm-block">
                            <a href="anmeldung#content" class="btn btn-outline-light btn-lg uppercase">Anmeldung</a>
                            <a type="#" class="btn btn-primary btn-lg">Mehr Informationen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/#content">Startseite <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Verein
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="vorstand#content">Vorstand</a>
                        <a class="dropdown-item" href="foerderverein#content">Förderverein</a>
                        <a class="dropdown-item" href="#">Schiedsrichter</a>
                        <a class="dropdown-item" href="#">Ehrenmitglieder</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jugend
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="jugendvorstand#content">Jugendvorstand</a>
                        <a class="dropdown-item" href="jugendleiter#content">Jugendleiter</a>
                        <hr>
                        <a class="dropdown-item" href="a-jugend#content">A-Jugend</a>
                        <a class="dropdown-item" href="c-jugend#content">C-Jugend</a>
                        <a class="dropdown-item" href="d1-jugend#content">D1-Jugend</a>
                        <a class="dropdown-item" href="#">D2-Jugend</a>
                        <a class="dropdown-item" href="#">E1-Jugend</a>
                        <a class="dropdown-item" href="#">E2-und E3-Jugend</a>
                        <a class="dropdown-item" href="#">F1-Jugend</a>
                        <a class="dropdown-item" href="#">F2-Jugend</a>
                        <a class="dropdown-item" href="#">F3-Jugend</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Senioren
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="1mannschaft#content">1. Mannschaft</a>
                        <a class="dropdown-item" href="2mannschaft#content">2. Mannschaft</a>
                        <a class="dropdown-item" href="alte_herren#content">Alte Herren</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fotos#content">Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sponsoren#content">Sponsoren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt#content">Kontakt</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="anmeldung#content">Anmeldung</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
<div id="app">
    <main id="content">
        @yield('content')
    </main>
</div>
</body>

<div class="container-fluid" style="width: 100%; height:400px; padding:0px; margin:0px; padding-top: 60px;">
    <iframe
        width="100%"
        height="100%"
        frameborder="0" style="border:0;"
        src="https://www.google.com/maps/embed/v1/view?key=AIzaSyCsI-67JljWhFs72pv6ocoYKoNTmZaEJ-w&center=50.9371308, 6.5698302&zoom=16">
    </iframe>
</div>
<footer>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-12 col-md-4 social centered">
                <div class="row">
                    <div class="col-12">
                        <h5>Social Media</h5>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3"><a href="#"><i class="fab fa-facebook socialMediaIcon"></i></a></div>
                            <div class="col-3"><a href="#"><i class="fab fa-twitter socialMediaIcon"></i></a></div>
                            <div class="col-3"><a href="#"><i class="fab fa-instagram socialMediaIcon"></i></a></div>
                            <div class="col-3"><a href="#"><i class="fab fa-youtube socialMediaIcon"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="light">

            <div class="row centered">
                <div class="col">
                    <h5>Kontakt</h5>
                    <span>Gladbacher Str. 100,<br> 50189 Elsdorf<br/><a href="tel:02274908574">02274 / 908574</a></span>
                </div>
                <div class="col"><h5>Informationen</h5>
                    <p>
                        <a href="#" data-toggle="modal" data-target="#datenschutz">Datenschutz</a><br/>
                        <a href="#" data-toggle="modal" data-target="#impressum">Impressum</a>
                    </p>
                </div>
            </div>
            <div class="col-12 mb-4">
                <h5>&copy; SC08.DE</h5><br/>
                <a href="#content"><i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Impressum -->
<div class="modal fade" id="impressum" tabindex="-1" role="dialog" aria-labelledby="impressumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Impressum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Strasse:</b><br> Heerstrasse 13</p>
                <p><b>Ort:</b><br> 50126 Bergheim</p>
                <p>
                    <b>Verantwortlicher:</b> <br>
                    SC08 e.V.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<!-- Datenschutz -->
<div class="modal fade" id="datenschutz" tabindex="-1" role="dialog" aria-labelledby="datenschutzModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Datenschutz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
