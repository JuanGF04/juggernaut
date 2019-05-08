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
		<div class="main" style="height: 200%;">
			<div class="seccion2">
			<header><div><span>Más populares</span></div></header>


					<?php

						$resultado = DB::table('games')->orderBy('popularidad', 'desc')->limit(10)->get();

						//echo "<table border='1'>";
						echo "<div id='container'>";

						foreach ($resultado as $mostrar) {
							$id = $mostrar->icodgame;
							$nombre = $mostrar->game_name;
							$precio = $mostrar->precio;
							$caratula = $mostrar->caratula;
							$desarrollador = $mostrar->desarrollador;
							$popularidad = $mostrar->popularidad;

							echo "<div id='juegoconcreto'>";
								echo "<a href='http://localhost/juggernaut/public/juego?icodgame=$id'><img  id='imagenpopu' src='$caratula'></a>";
								echo "<span>".$nombre."</span>";
								//echo "<h6>".$precio." € </h6>";
							echo "</div>";

						}

						echo "</div>";
						//echo"</table>";
					?>
					<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
			<header><div><span>Top Juggernaut</span><img src="img/jugger.ico"/></div></header>

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

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
