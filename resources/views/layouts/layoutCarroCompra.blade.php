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
			<a href="http://localhost/juggernaut/public/tienda"><div class="activo seccion">Tienda</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!--<a href="login.html"><div class="float_der seccion">Iniciar sesión</div></a>-->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")
		</nav>


		<div class="main">
      <?php


      $nombre =$_SESSION ['nombre'];

      $icoduser = DB::table('users')->where('name', $nombre)->value('icoduser');

      $game1 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame1');
      $game2 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame2');
      $game3 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame3');

			echo "Los juegos que has añadido a la cesta son:"."<br>";

			$resultado = DB::table('games')->where('icodgame', $game1)->orWhere('icodgame', $game2)->orWhere('icodgame', $game3)->get();

			foreach ($resultado as $mostrar) {
				$id = $mostrar->icodgame;
				$nombre = $mostrar->game_name;
				$precio = $mostrar->precio;
				$precioJP = $mostrar->precio_jp;
				$caratula = $mostrar->caratula;
				$desarrollador = $mostrar->desarrollador;
				$genero = $mostrar->genero;
				$trailer = $mostrar->trailer;
				$descripcion = $mostrar->descripcion;


					echo "<img src='$caratula' />".$nombre."<a href='http://localhost/juggernaut/public/borrargame?idgame=$id'><img width='50px' heigth='50px' src='img/borrar.png' /><br></a>";

			}

			echo "<a href='comprar.php'>Comprar</a>"



       ?>

		</div>

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
