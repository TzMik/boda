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
	<link rel="stylesheet" href="css/style.css?v=1.0.1">
	<!-- COUNTDOWN -->
	<script src="js/countdown.js?v=1.0.1" defer></script>
    <!-- ADDEVENT -->
    <script src="libraries/addevent-1.6.1/atc.min.js"></script>
</head>

<body>
	<div class="boda-main-header">
		<div>
			<h1 class="text-center">Fer Quiroga<br> & <br>Mikel Cantero</h1>
			<h2 class="text-center">19 de agosto del 2022</h2>
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
            <div class="d-flex justify-content-center mt-4">
                <div title="Add to Calendar" class="addeventatc">
                    Añadir al calendario
                    <span class="start">08/19/2022 07:30 PM</span>
                    <span class="end">08/20/2022 03:00 AM</span>
                    <span class="timezone">America/Guadalajara</span>
                    <span class="title">Boda Fer Quiroga y Mikel Cantero</span>
                    <span class="location">Camino a las Moras 1535 San Agustín, 45640 Guadalajara, Jal.</span>
                </div>
            </div>
		</div>
	</div>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
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
	<section class="container mt-5" id="nos-casamos">
		<h2 class="text-center">Nos casamos</h2>
		<hr>
		<p class="text-center">
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
			<br>
			<br>
			<b>Mikel:</b> yo me despertaré antes para hacerte el café todas las mañanas y dormir abrazándote aunque se me duerma el brazo.
			<br>
			<br>
			<b>Fer:</b> Yo prometo no invadir tu lado del closet aunque ya no tenga espacio, escuchar tu música en el coche aunque no me guste y a no tocar tu pantalla cuando señale algo.
			<br>
			<br>
			<b>Prometemos</b> hacer cualquier cosa para tener ataques de risa, porque el matrimonio es más que un contrato, es la decisión consciente de querer empezar un camino de crecimiento juntos.
	</section>
	<section class="container mt-5" id="informacion">
		<h2 class="text-center">Información del evento</h2>
		<h3 class="text-center">Aquí tienes todo lo que debes saber sobre la boda</h3>
		<hr>
		<div class="row">
			<div class="col-md-4 col-sm-12 mt-3">
				<div class="card">
					<img src="img/cattaleya.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">Ceremonía civil y recepción</h4>
						<p class="card-text text-center mt-3"><b>Terraza Cattaleya</b><br>La ceremonia civil y recepción se llevará a cabo a las 19:30</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 mt-3">
				<div class="card">
					<img src="img/regalos.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">Sugerencia de regalos</h4>
						<p class="card-text text-center mt-3"><b>De sobre</b><br>El mejor regalo es su asistencia, pero si desean ayudarnos con nuestra luna de miel habrá un buzón en la recepción donde podrán depositar su sobre<br><br><b>Mesa de regalos</b><br>O si lo prefieren tenemos una <a href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/50435213" target="_blank">mesa de regalos en Liverpool</a><br>(número: 50435213)</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 mt-3">
				<div class="card">
					<img src="img/vestimenta.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">Información importante</h4>
						<p class="card-text text-center mt-3"><b>Codigo de vestimenta</b><br>Formal<br><br><b>Sin niños</b><br>Consideramos que una boda es un ambiente para adultos, por lo tanto esta celebración se relizará sin niños</p>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-3 col-sm-12 mt-3">
				<div class="card">
					<img src="img/cattaleya.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">Ceremonia h Civil</h4>
						<p class="card-text text-center">19:30</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 mt-3">
				<div class="card">
					<img src="img/coctel.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">Recepción y cóctel</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 mt-3">
				<div class="card">
					<img src="img/cena.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">Cena</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 mt-3">
				<div class="card">
					<img src="img/fiesta.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">Fiesta</h4>
					</div>
				</div>
			</div> -->
		</div>

	</section>
	<section class="container mt-5" id="ubicacion">
		<h2 class="text-center">Ubicación</h2>
		<h3 class="text-center">Camino a las Moras 1535 San Agustín, 45640 Guadalajara, Jal.</h3>
		<hr>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119540.58571313121!2d-103.55010054179687!3d20.561770399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f54cb56244067%3A0xf59a6800d22d5d55!2sTerraza%20la%20Cattaleya!5e0!3m2!1ses-419!2smx!4v1650407859324!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<section class="container mt-5" id="estancia">
		<h2 class="text-center">Sugerencia de estancia</h2>
		<h3 class="text-center">Estos son los hoteles que recomendamos en <b>Guadalajara</b></h3>
		<hr>
		<p class="text-justify">Para nuestros invitados que no sean de Guadalajara les recomendamos los siguientes hoteles. Las tres opciones son similares y lo bueno de dichas opciones es que están muy cerca del salón de eventos.</p>
		<div class="row">
			<div class="col-md-4 col-sm-12 mt-3">
				<div class="card">
					<img src="img/encore.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">
							<a href="https://www.booking.com/hotel/mx/encore-guadalajara.es-mx.html?auth_success=1" target="_blank">RAMADA ENCORE BY WYNDHAM
						</h4></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 mt-3">
				<div class="card">
					<img src="img/city-express.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">
							<a href="https://www.booking.com/hotel/mx/microtel-inn-suites-by-wyndham-guadalajara-sur.es-mx.html" target="_blank">CITY PLUS PALOMAR
						</h4></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 mt-3">
				<div class="card">
					<img src="img/microtel.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="text-center">
							<a href="https://www.booking.com/searchresults.es.html?aid=318615;label=Spanish_Mexico_ES_MX_29562092065-cLT9fzE7SIMemTvcIRTruwS217246155567%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi2133569918%3Atidsa-322982440308%3Alp1010088%3Ali%3Adec%3Adm;sid=128b0b9c06131c79414a7a3d532be46f;city=-1669612;expand_sb=1;highlighted_hotels=1442306;hlrd=no_dates;keep_landing=1;redirected=1;source=hotel&gclid=CjwKCAjwrqqSBhBbEiwAlQeqGgPbU3FSoi2IaRcM3Ot7cGJ1vrKJl-Vs8IeOrG6RUP__mk3QAynY8hoCzjsQAvD_BwE&room1=A,A" target="_blank">MICROTEL INN & SUITES BY WYNDHAM
						</h4></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container mt-5" id="viaje">
		<h2 class="text-center">Planes del viaje</h2>
		<h3 class="text-center">¡Nos vamos a <b>Nuevo Vallarta</b>!</h3>
		<hr>
		<div class="row">
			<div class="col-md-6 col-sm-12 mt-3">
				<img src="img/vallarta.jpeg" alt="">
			</div>
			<div class="col-md-6 col-sm-12 mt-3">
				<p class="text-justify">
					Estamos planeando un viaje después de la boda a Nuevo Vallarta ¿Te interesa?. Planeamos ir al hotel <b>DREAMS VILLAMAGNA EN NUEVO VALLARTA</b> del día 22 al 25 de agosto. Les podemos pasar el número y correo electrónico de la encargada que nos está realizando todas las reservaciones, o si prefieren pueden hacerlo por medio de otra plataforma.
				</p>
			</div>
		</div>
	</section>
	<section class="container mt-5 mb-5" id="asistencia">
		<h2 class="text-center">Confirma tu asistencia</h2>
		<h3 class="text-center">Confírmanos la asistencia por WhatsApp</h3>
		<hr>
		<div class="row">
			<div class="col-6 d-flex mt-3">
				<a href="https://wa.me/3318019637" target="_blank" class="btn btn-primary" style="margin-left: auto;"><img src="img/icons/whatsapp.png" class="whatsapp-icon" alt="">Confirma con Fer</a>
			</div>
			<div class="col-6 d-flex justify-content-left mt-3">
				<a href="https://wa.me/3326462099" target="_blank" class="btn btn-secondary"><img src="img/icons/whatsapp.png" class="whatsapp-icon" alt="">Confirma con Mikel</a>
			</div>
		</div>
	</section>
</body>

</html>
