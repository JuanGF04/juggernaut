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
			<div class="activo seccion">Inicio</div>
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
				<br> Si quieres participar en las competiciones, es necesario <a href="register.html">iniciar sesión</a>.</b></p>
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
				<header><span>Últimas noticias</span></header>
				<table>
					<tr>
						<td><img src="img/noticia1.jpg"><h3>God of War 4 llega el 20 de abril con un Kratos renovado</h3></td>
						<td><img src="img/noticia1.jpg"><h3>God of War 4 llega el 20 de abril con un Kratos renovado</h3></td>
						<td><img src="img/noticia1.jpg"><h3>God of War 4 llega el 20 de abril con un Kratos renovado</h3></td>
					</tr>
					<tr>
						<td><img src="img/noticia1.jpg"><h3>God of War 4 llega el 20 de abril con un Kratos renovado</h3></td>
						<td><img src="img/noticia1.jpg"><h3>God of War 4 llega el 20 de abril con un Kratos renovado</h3></td>
						<td><img src="img/noticia1.jpg"><h3>God of War 4 llega el 20 de abril con un Kratos renovado</h3></td>
					</tr>
				</table>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
				<header><span>Artículos</span></header>
				<table>
					<tr>
						<td><img src="img/articulo1.jpg"><h3>¿Los videojuegos estimulan la creatividad?</h3></td>
						<td><img src="img/articulo1.jpg"><h3>¿Los videojuegos estimulan la creatividad?</h3></td>
						<td><img src="img/articulo1.jpg"><h3>¿Los videojuegos estimulan la creatividad?</h3></td>
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

		@include("layouts.code.scripts")
		@yield("scripts")
	</body>
</html>
