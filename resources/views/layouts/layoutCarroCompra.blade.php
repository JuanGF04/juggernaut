<html>
	<head>
@include("layouts.code.links")
@yield("links")

		<style type="text/css">

			div.main{
				height: auto;

			}
			h1{
				color: black;
				margin-top: 2%;
				text-align: center;
				font-family: graceland;
			}
			.caja_lista{
				width: 98%;
				margin-left: 3%;
				padding-top: 2%;
				padding-left: 5%;
				padding-bottom: 3%;
			}
			table{
				width: 90%;

			}

			table tr td{
				/*border: 2px solid blue;*/
			}
			table tr td:nth-child(1){
				width: 20%;
				height: 30vh;

			}
			table tr td:nth-child(1) img{
				border-radius: 1500px;
				width: 100%;
				height: 100%;
			}
			table tr td:nth-child(2) {
				padding-left: 5%;
				width: 60%;
			}
			table tr td:nth-child(2) span{
				font-size: 3vw;
			}
			table tr td:nth-child(3) {
				padding-left: 7%;
				width: 20%;
			}
			table tr td:nth-child(3) span{
				font-size: 2vw;
			}
			table tr td:nth-child(4){
			}
			table tr td:nth-child(4) img{
				height: 50%;
				width: 5vw;
				position: relative;
			}

			table tr td:nth-child(4) img:hover{
				animation: botar;
				animation-duration: 1s;
				animation-iteration-count: infinite;
			}

			table tr:nth-last-child(1) td{
				height: auto;
				text-align: right;
			}
			table tr:nth-last-child(1) td span{
				font-size: 3vw;
			}

			@keyframes botar {
				0%{
					bottom: 0%;
					}
				25%{
					bottom: 5%;
				}
				50%{
					bottom:0%;
				}
				75%{
					bottom: 5%;
				}
				100%{
					bottom: 0%;
				}
			}

			#cestavacia{
				text-align: center;
				margin-bottom:10%;
				width: 90%;
			}

			#cestavacia span{
				font-size: 5vw;
			}
			#cestavacia a{

				color: rgba(200,0,0,1);
				font-size: 2vw;
				border: 2px solid red;
				border-radius: 10px;
				background-color: rgba(200,200,200,.5);
			}
		</style>
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

			echo "<h1>Mi cesta</h1>";
			echo "<div class='caja_lista'>";
			if($game1 == 0){
				echo "<div id='cestavacia'>";
				echo "<span>Tu cesta de la compra está vacía</span><br>";
				echo "<a href='http://localhost/juggernaut/public/tienda'>Ir a la tienda</a>";
				echo "</div>";
			}
			echo "<table>";
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

					echo"<tr>";
					echo "<td><img src='$caratula' /></td><td><span>$nombre</span></td><td><span>$precio €</span></td><td><a href='http://localhost/juggernaut/public/borrargame?idgame=$id'><img src='img/borrar.png' /></a></td>";
					echo "</tr>";
			}
			$precio_total = DB::table('compra')->where('icoduser', $icoduser)->value('precio_total');
			echo "<tr><td colspan='4'><span>Total: $precio_total €</span></td></tr>";
			echo "</table>";
			echo "</div>";
			echo "<a href='comprar.php'>Comprar</a>";



       ?>

		</div>

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
