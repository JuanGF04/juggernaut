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
			<div class="activo seccion">Rankings</div>
			<a href="http://localhost/juggernaut/public/tienda"><div class="seccion">Tienda</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!--<a href="login.html"><div class="float_der">Iniciar sesión</div></a>-->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")
		</nav>
		<div class="main">

			<div class="seccion3">
			<header><span>Ranking general Juggernaut</span></header>
				<div class="cuadro">
					<table>
						<tr>
							<th>Jugador</th>
							<th >País</th>
							<th>Clan</th>
							<th>Juego favorito</th>
							<th><img class="jugg_point" src="img/jugger.png">Juggernaut Points</th>
						</tr>
						<tr>
							<td>chain1lol</td>
							<td><img src="img/españa.png"></td>
							<td>No soy manco, tengo lag</td>
							<td>Bloodborne</td>
							<td>10000</td>
						</tr>
						<tr>
							<td>xXPinchePendejoxx</td>
							<td><img src="img/mexico.png"></td>
							<td>Beasts</td>
							<td>FIFA 18</td>
							<td>9215</td>
						</tr>
						<tr>
							<td>Plataoplomo69</td>
							<td><img src="img/colombia.png"></td>
							<td>No soy manco, tengo lag</td>
							<td>Dark Souls 3</td>
							<td>8965</td>
						</tr>
						<tr>
							<td>LuisAlberto95</td>
							<td><img src="img/mexico.png"></td>
							<td>Aguiluchos</td>
							<td>League of Legends</td>
							<td>7102</td>
						</tr>
						<tr>
							<td>xXxKillerCodexXx</td>
							<td><img src="img/españa.png"></td>
							<td>Beasts</td>
							<td>League of Legends</td>
							<td>7006</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Usuario</td>
							<td><img src="img/desconocido.png"></td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
					</table>
          <?php

            $resultado = DB::table('users')->get();

            echo "<table border='1'>";
            echo "<tr><td>CODIGO</td><td>NOMBRE</td><td>MAIL</td></tr>";

            foreach ($resultado as $mostrar) {
              $id = $mostrar->icoduser;
              $nombre = $mostrar->name;
              $precio = $mostrar->mail;

            echo "<tr>
                    <td>$id</td>
                    <td>$nombre</td>
                    <td>$precio</td>
                  </tr>";
            }

            echo"</table></br>";

          ?>
				</div>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
			<header><span>Rankings específicos</span></header>
				<table>
					<tr>
						<td><img src="img/ranking1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/ranking1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/ranking1.jpg"><h3>Fortnite</h3></td>
					</tr>
					<tr>
						<td><img src="img/ranking2.jpg"><h3>World of Warcraft Arena</h3></td>
						<td><img src="img/ranking2.jpg"><h3>World of Warcraft Arena</h3></td>
						<td><img src="img/ranking2.jpg"><h3>World of Warcraft Arena</h3></td>
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
