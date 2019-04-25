<html>

@include("layouts.code.links")
@yield("links")

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
			<div class="activo seccion">Tienda</div>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!-- <a href="login.html"><div class="float_der">Iniciar sesión</div></a> -->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")

		</nav>
		<div class="main">
			<div class="seccion2">
			<header><span>Más populares</span></header>
				<table>
					<tr>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
					</tr>
					<tr>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
					</tr>
				</table>
			</div>

			<div class="seccion2">
			<header><span></span></header>
				<table>
					<tr>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
					</tr>
					<tr>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
					</tr>
				</table>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
			<header><span>Descargables</span></header>
				<table>
					<tr>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
					</tr>
					<tr>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
					</tr>
				</table>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>
		</div>

		<footer>
			<div>
				<img src="img/instagram.png">
				<img src="img/facebook.png">
				<img src="img/linkedin.png"><br>
				<span>Juan González Fernández</span>
			</div>
			<div>
				<span class="enlace">Política de cookies</span>
				<span class="enlace">Información legal</span>
			</div>
		</footer>

		<div class="flecha">
			<a href="#top"><img src="img/flecha.png"></a>
		</div>

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
