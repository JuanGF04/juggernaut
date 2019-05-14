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
			<a href="http://localhost/juggernaut/public/"><div class="seccion">Inicio</div></a>
			<a href="http://localhost/juggernaut/public/eventos"><div class="seccion">Eventos</div></a>
			<a href="http://localhost/juggernaut/public/rankings"><div class="seccion">Rankings</div></a>
			<a href="http://localhost/juggernaut/public/tienda"><div class="seccion">Tienda</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div class="activo seccion">Foros</div></a>
			<!--<a href="login.html"><div class="float_der">Iniciar sesión</div></a>-->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")
		</nav>
		<div class="main">
			<div class="seccion2">
				<header><span>Foros Juggernaut</span></header>
					<ul class="jugger">
						<a href="http://www.google.es"><li>¿Juego del año 2018?</li></a>
						<a href="http://www.google.es"><li>God of War 4</li></a>
						<a href="http://www.google.es"><li>¿Se desarrollará un nuevo Assasins Creed?</li></a>
						<a href="http://www.google.es"><li>¿Realmente llegó P.T a tal nivel de terror?</li></a>
						<a href="http://www.google.es"><li>E-Sports</li></a>
					</ul>
					<img src="img/juggerizq.png">
				<div class="pie_seccion"></div>
			</div>

			<div class="seccion2">
				<header><span>Foros de la comunidad</span></header>
					<ul>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
						<a href="http://www.google.es"><li>Ejemplo de foro</li></a>
					</ul>
				<div class="pie_seccion"></div>
			</div>
		</div>

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")
	</body>
</html>
