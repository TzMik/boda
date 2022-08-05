<?php
const ROOT_PATH = "/nuevoBoda";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda Ferkel</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/style.css?v=1.0.4">
    <!-- COUNTDOWN -->
    <script src="js/countdown.js?v=1.0.1" defer></script>
    <!-- ADDEVENT -->
    <link rel="stylesheet" href="libraries/addevent-1.6.1/css/theme6.css" type="text/css" media="screen">
    <script src="libraries/addevent-1.6.1/atc.min.js?v=1.0.0"></script>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-center d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_PATH ?>/#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_PATH ?>/#nos-casamos">Nos casamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_PATH ?>/#informacion">Informacion del evento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_PATH ?>/#ubicacion">Ubicacion</a>
                </li>
                <span>FER Y MIKEL</span>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_PATH ?>/#estancia">Sugerencia de estancia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_PATH ?>/#viaje">Planes del viaje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_PATH ?>/#asistencia">Confirma tu asistencia</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="boda-main-header">
    <div>
        <h1>Fer Quiroga</h1>
        <h1 class="text-center">&</h1>
        <h1 class="text-right">Mikel Cantero</h1>
        <h2 class="text-center">19 de agosto del 2022</h2>
        <div class="d-flex justify-content-center mt-4">
            <div title="Add to Calendar" class="addeventatc" data-styling="none">
                Añadir al calendario
                <span class="arrow">&nbsp;</span>
                <span class="start">08/19/2022 07:30 PM</span>
                <span class="end">08/20/2022 03:00 AM</span>
                <span class="timezone">America/Guadalajara</span>
                <span class="title">Boda Fer Quiroga y Mikel Cantero</span>
                <span class="location">Camino a las Moras 1535 San Agustín, 45640 Guadalajara, Jal.</span>
            </div>
        </div>
        <div class="countdown d-flex justify-content-center mt-3">
            <div class="text-center">
                <div class="countdown-element" id="days">0</div>
                <div class="countdown-title">Días</div>
            </div>
            <div class="text-center">
                <div class="countdown-element" id="hours">0</div>
                <div class="countdown-title">Horas</div>
            </div>
            <div class="text-center">
                <div class="countdown-element" id="mins">0</div>
                <div class="countdown-title">Minutos</div>
            </div>
            <div class="text-center">
                <div class="countdown-element" id="secs">0</div>
                <div class="countdown-title">Segundos</div>
            </div>
        </div>
    </div>
</div>

<section class="container mt-5" id="nos-casamos">
    <div class="row">
        <div class="col-md-7 col-sm-12 text-justify mt-3">
            <h2>Nos casamos</h2>
            Distancia, una propuesta, un SÍ y una decisión que tomamos los dos. Nuestro amor ha crecido, madurado y florecido, a veces no ha sido sencillo; no lo negamos, difícil y muy arriesgado, pero... siempre sorprendente. Cada crecimiento personal y de pareja que hemos tenido ha sido gratificante, vernos el uno al otro crecer en todas nuestras áreas y ser parte de ello.
            <br>
            <br>
            Somos aventureros, dedicados, fuertes de carácter; los desafíos que hemos enfrentado nos han ayudado a crecer y madurar; debemos agradecer a esos retos porque con ellos nos hemos dado cuenta que juntos podemos lograr lo que nos proponemos.
            <br>
            <br>
            Tan solo podemos decir que nuestra vida en estos momentos se encuentra completa y estamos listos para compartir el resto de nuestros días juntos.
            <br>
            <br>
            Decidimos comenzar esta nueva etapa en nuestras vidas y nos prometemos recorrer el mundo entero, no cocinar los domingos y ver películas, comer tacos una vez al mes y no dormir enojados.
        </div>
        <div class="col-md-4 offset-md-1 col-sm-12 px-5 d-flex align-items-center mt-3 section-image" id="nos-casamos-img"></div>
    </div>
</section>
<section class="container mt-md-5" id="novios">
    <div class="row">
        <div class="col-md-3 col-sm-12 section-image" id="mikel-img"></div>
        <div class="col-md-3 col-sm-12">
            <h2>Mikel</h2>
            <p>yo me despertaré antes para hacerte el café todas las mañanas y dormir abrazándote aunque se me duerma el brazo.</p>
        </div>
        <div class="col-md-3 col-sm-12 mt-auto">
            <h2 class="text-right">Fer</h2>
            <p class="text-right">Yo prometo no invadir tu lado del closet aunque ya no tenga espacio, escuchar tu música en el coche aunque no me guste y a no tocar tu pantalla cuando señale algo.</p>
        </div>
        <div class="col-md-3 col-sm-12 mt-auto section-image" id="fer-img"></div>
    </div>
    <div class="row mt-5">
        <p class="col-md-8 offset-md-2 col-sm-12 text-center"><b>Prometemos hacer cualquier cosa para tener ataques de risa, porque el matrimonio es más que un contrato, es la decisión consciente de querer empezar un camino de crecimiento juntos.</b></p>
    </div>
</section>


<section class="container-fluid mt-5 p-5" id="informacion">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h2>Evento</h2>
            <p class="mt-3">
                <b>Ceremonía civil y recepción</b>
                <br>
                Será en la Terraza Cattaleya y se llevará a cabo a las 20:00
            </p>
            <p class="mt-3">
                <b>Sugerencia de regalos</b>
                <br>
                El mejor regalo es su asistencia, pero si desean ayudarnos con nuestra luna de miel habrá un buzón en la recepción donde podrán depositar su sobre. O si lo prefieren tenemos una <a href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/50435213" target="_blank">mesa de regalos en Liverpool</a><br>(número: <b>50435213</b>)
            </p>
            <p class="mt-3">
                <b>Información importante</b>
                <br>
                Codigo de vestimenta: <b>Formal</b>
                <br>
                <br>
                Consideramos que una boda es un ambiente para adultos, por lo tanto esta celebración se relizará <b>sin niños</b>
            </p>
        </div>
        <div class="col-md-5 offset-md-1 col-sm-12 d-flex align-items-center p-5 section-image" id="info-img"></div>
    </div>
</section>
<section class="container mt-5" id="ubicacion">
    <h2>Ubicación</h2>
    <p><b>Terraza Cattaleya</b></p>
    <p>Camino a las Moras 1535 San Agustín, 45640 Guadalajara, Jal.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119540.58571313121!2d-103.55010054179687!3d20.561770399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f54cb56244067%3A0xf59a6800d22d5d55!2sTerraza%20la%20Cattaleya!5e0!3m2!1ses-419!2smx!4v1650407859324!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="container-fluid mt-5 p-5" id="estancia">
    <h2 class="text-center">Sugerencia de estancia</h2>
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-3">
            <img src="img/encore.jpg" class="card-img-top" alt="...">
            <h3><a href="https://www.booking.com/hotel/mx/encore-guadalajara.es-mx.html?auth_success=1" target="_blank">RAMADA ENCORE BY WYNDHAM</a></h3>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <img src="img/city-express.jpg" class="card-img-top" alt="...">
            <h3><a href="https://www.booking.com/hotel/mx/city-express-plus-guadalajara-palomar.es-mx.html" target="_blank">CITY PLUS PALOMAR</a></h3>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <img src="img/microtel.jpg" class="card-img-top" alt="...">
            <h3><a href="https://www.booking.com/hotel/mx/microtel-inn-suites-by-wyndham-guadalajara-sur.es-mx.html" target="_blank">MICROTEL INN & SUITES BY WYNDHAM</a></h3>
        </div>
    </div>
    <div class="row">
        <p class="col-md-8 offset-md-2 text-center">Para nuestros invitados que no sean de Guadalajara les recomendamos los siguientes hoteles. Las tres opciones son similares y lo bueno de dichas opciones es que están muy cerca del salón de eventos.</p>
    </div>
</section>
<section class="container mt-5" id="viaje">
    <div class="row">
        <div class="col-md-6 col-sm-12 mt-3 d-flex align-items-center">
            <div>
                <h2>Planes del viaje</h2>
                <p class="text-justify">Estamos planeando un viaje después de la boda a Nuevo Vallarta ¿Te interesa?. Planeamos ir al hotel <b>DREAMS VILLAMAGNA EN NUEVO VALLARTA</b> del día 22 al 25 de agosto. Les podemos pasar el número y correo electrónico de la encargada que nos está realizando todas las reservaciones, o si prefieren pueden hacerlo por medio de otra plataforma.</p>
            </div>
        </div>
        <div class="col-md-5 offset-md-1 col-sm-12 mt-3 section-image" id="img-vallarta"></div>
    </div>
</section>
<section class="container-fluid mt-5 d-flex justify-content-center" id="asistencia">
    <div class="d-flex align-items-center justify-content-center">
        <div>
            <h2 class="text-center">Confirma tu asistencia</h2>
            <div class="confirm-buttons">
                <a href="https://wa.me/3318019637" target="_blank" class="btn btn-primary mt-2" style="margin-left: auto;"><img src="img/icons/whatsapp.png" class="whatsapp-icon" alt="">Confirma con Fer</a>
                <a href="https://wa.me/3326462099" target="_blank" class="btn btn-secondary mt-2"><img src="img/icons/whatsapp.png" class="whatsapp-icon" alt="">Confirma con Mikel</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>
