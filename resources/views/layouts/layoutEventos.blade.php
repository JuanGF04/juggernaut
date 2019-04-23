<html>

@include("layouts.code.links")
@yield("links")

	<body>

@include("layouts.code.header")
@yield("header")

    <nav>
			<a href="http://localhost/juggernaut/public/"><div>Inicio</div></a>
			<div class="activo">Eventos</div></a>
			<a href="http://localhost/juggernaut/public/rankings"><div>Rankings</div></a>
			<a href="http://localhost/juggernaut/public/tienda"><div>Juegos</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div>Foros</div></a>
			<a href="login.html"><div class="float_der">Iniciar sesión</div></a>
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

		<footer>
			<div>
				<img src="img/instagram.png">
				<img src="img/facebook.png">
				<img src="img/linkedin.png"><br>
				<span>Juan González Fernández</span>
				<span>Juggernaut Corp.</span>
			</div>
			<div>
				<span class="enlace">Política de cookies</span>
				<span class="enlace">Información legal</span>
			</div>
		</footer>

		<div class="flecha">
			<a href="#top"><img src="img/flecha.png"></a>
		</div>


	</body>
</html>