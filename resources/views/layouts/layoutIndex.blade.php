<html>
	<head>
@include("layouts.code.links")
@yield("links")
	</head>
	<body>

@include("layouts.code.header")
@yield("header")
		<?php
			session_start();
		?>
		<nav>
			<a href="http://localhost/juggernaut/public/"><div class="activo seccion">Inicio</div></a>
			<a href="http://localhost/juggernaut/public/eventos"><div class="seccion">Eventos</div></a>
			<a href="http://localhost/juggernaut/public/rankings"><div class="seccion">Rankings</div></a>
			<a href="http://localhost/juggernaut/public/tienda"><div class="seccion">Tienda</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!--<a href="login.html"><div class="float_der">Iniciar sesión</div></a>-->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")
		</nav>

		<div class="main">

			<?php
				if(isset($_SESSION['logueado'])){
					if ($_SESSION['logueado']==false){
			?>

			<div class="bienvenida">
				<img src="img/hada.png">
				<p><b>Saludos, jugador.<br> Bienvenido a Juggernaut, un sitio en el que podrás poner a prueba tus habilidades como jugador de videojuegos y
				aumentar tu conocimiento sobre ellos.
				<br> Si quieres participar en las competiciones, es necesario <label style="font-size: 200%;">iniciar sesión.</label></b></p>
			</div>
			<?php
		}else{
			echo "<div class='bienvenida'>";
			echo "<img src='img/hada.png'>";
			echo "<span id='bienvenida'>Bienvenido, ".$_SESSION['nombre']."</span>";
			echo "</div>";
		}

	}
			 ?>


			<div class="seccion1">
				<header><span>Juego recomendado de la semana</span></header>
				<video width="320" height="240" poster="img/bloodborne.jpg" controls muted autoplay loop>
					<source src="video/bloodborne.mp4" type="video/mp4" />
				</video>
				<div class="ficha_tec">
					<h1>Bloodborne</h1>
					<div>
						<p><span>Género:</span></p>
						<p><span>Compañía:</span></p>
						<p><span>Fecha de lanzamiento:</span></p>
						<p><span>Descripción:</span></p>
					</div>
				</div>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
				<header><div><span>Últimas noticias</span></div></header>
				<div id="juegoconcreto">Hola</div>

				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
				<header><div><span>Artículos</span></div></header>
				<div id="juegoconcreto">Hola</div>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>
		</div>

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
