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
			<div class="activo seccion">Eventos</div></a>
			<a href="http://localhost/juggernaut/public/rankings"><div class="seccion">Rankings</div></a>
			<a href="http://localhost/juggernaut/public/tienda"><div class="seccion">Tienda</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!--<a href="login.html"><div class="float_der seccion">Iniciar sesión</div></a>-->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")
		</nav>


		<div class="main">
			<div class="seccion2">
			<header><span>Eventos en curso</span></header>
				<table>
					<tr>
						<td><img src="img/evento1.jpg"><h3>Torneo Juggernaut de League of Legends (Ganador: 500 JP)</h3></td>
						<td><img src="img/evento1.jpg"><h3>Torneo Juggernaut de League of Legends (Ganador: 500 JP)</h3></td>
					</tr>
				</table>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
			<header><span>Próximos eventos</span></header>
				<table>
					<tr>
						<td><img src="img/evento2.jpg"><h3>Starcraft II League; Jornada 3</h3></td>
						<td><img src="img/evento2.jpg"><h3>Starcraft II League; Jornada 3</h3></td>
						<td><img src="img/evento2.jpg"><h3>Starcraft II League; Jornada 3</h3></td>
					</tr>
				</table>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
			<header><span>Eventos finalizados</span></header>
				<table>
					<tr>
						<td><img src="img/evento3.jpg"><h3>Torneo Juggernaut Dark Souls Arena (Ganador: 250 JP)</h3></td>
						<td><img src="img/evento3.jpg"><h3>Torneo Juggernaut Dark Souls Arena (Ganador: 250 JP)</h3></td>
						<td><img src="img/evento3.jpg"><h3>Torneo Juggernaut Dark Souls Arena (Ganador: 250 JP)</h3></td>
					</tr>
					<tr>
						<td><img src="img/evento3.jpg"><h3>Torneo Juggernaut Dark Souls Arena (Ganador: 250 JP)</h3></td>
						<td><img src="img/evento3.jpg"><h3>Torneo Juggernaut Dark Souls Arena (Ganador: 250 JP)</h3></td>
						<td><img src="img/evento3.jpg"><h3>Torneo Juggernaut Dark Souls Arena (Ganador: 250 JP)</h3></td>
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
