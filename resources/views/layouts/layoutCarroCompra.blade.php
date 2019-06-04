<html>
	<head>
@include("layouts.code.links")
@yield("links")

		<style type="text/css">

			div.main{
				height: auto;
				padding-bottom: 2%;

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
				padding-left: 2.5%;
				padding-bottom: 3%;
			}
			table{
				width: 95%;

			}

			table tr:nth-child(1) td{
				height: 20px;
			}
			table tr td{
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
				width: 50%;
			}
			table tr td:nth-child(2) span{
				font-size: 3vw;
			}
			table tr td:nth-child(3) {
				width: 15%;
				text-align: center;
			}
			table tr td:nth-child(3) span{
				font-size: 1.3vw;
				width: 100%;
				float: left;
			}
			table tr td:nth-child(4){
				width: 5%;
				text-align: center;
				font-size: 2vw;
			}

			table tr td:nth-last-child(1){
				width: 10%;
				text-align:right;
			}
			table tr td:nth-child(5) img{
				height: 50%;

				width: 5vw;
				position: relative;
			}

			table tr td:nth-child(5) img:hover{
				animation: botar;
				animation-duration: 1s;
				animation-iteration-count: infinite;
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

			#buttons{
				float: left;
				height: 10%;
				width: 40%;
				margin-left: 30%;
			}

			#buttons button{
				height:100%;
				width: 50%;
			}

			#cajaDinero{
				background-color: rgba(255,255,255, 0.5);
				border: 2px groove black;
				margin-left: 25%;
				padding: 2%;
				width: 50%;
				display: none;
				clear: both;
			}

			#cajaPuntos{
				background-color: rgba(255,255,255, 0.5);
				border: 2px groove black;
				margin-left: 25%;
				padding: 1%;
				width: 50%;
				display: none;
				clear: both;
				text-align: center;
			}

			#cajaPuntos p{
				font-weight: bold;
				font-size: 120%;
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
			$unidadesgame1 = DB::table('compra')->where('icoduser', $icoduser)->value('unidadesgame1');
			$game2 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame2');
			$unidadesgame2 = DB::table('compra')->where('icoduser', $icoduser)->value('unidadesgame2');
			$game3 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame3');
			$unidadesgame3 = DB::table('compra')->where('icoduser', $icoduser)->value('unidadesgame3');
			$precio_total = DB::table('compra')->where('icoduser', $icoduser)->value('precio_total');
			$precio_totalJP = DB::table('compra')->where('icoduser', $icoduser)->value('preciojptotal');



			echo "<h1>Mi cesta</h1>";
			echo "<div class='caja_lista'>";
			if($game1 == 0){
				echo "<div id='cestavacia'>";
				echo "<span>Tu cesta de la compra está vacía</span><br>";
				echo "<a href='http://localhost/juggernaut/public/tienda'>Ir a la tienda</a>";
				echo "</div>";
				echo "</div>";
			}else{
				echo "<table>";
				echo "<th></th><th></th><th></th><th>Unidades</th><th></th>";

/*		$resultado = DB::table('games')->where('icodgame', $game1)->orWhere('icodgame', $game2)->orWhere('icodgame', $game3)->get();
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
				}
*/
				$caratula1 = DB::table('games')->where('icodgame', $game1)->value('caratula');
		  	$nombre1 = DB::table('games')->where('icodgame', $game1)->value('game_name');
				$precio1 = DB::table('games')->where('icodgame', $game1)->value('precio');
				$precioJP1 = DB::table('games')->where('icodgame', $game1)->value('precio_jp');
				echo"<tr>";
				echo "<td><img src='$caratula1' /></td><td><span>$nombre1</span></td><td><span>$precio1 € | $precioJP1 JP</span></td><td><span>$unidadesgame1</span></td><td><a href='http://localhost/juggernaut/public/borrargame?idgame=$game1'><img src='img/borrar.png' /></a></td>";
				echo "</tr>";

				if($game2 != 0){
					$caratula2 = DB::table('games')->where('icodgame', $game2)->value('caratula');
			  	$nombre2 = DB::table('games')->where('icodgame', $game2)->value('game_name');
					$precio2 = DB::table('games')->where('icodgame', $game2)->value('precio');
					$precioJP2 = DB::table('games')->where('icodgame', $game2)->value('precio_jp');
					echo"<tr>";
					echo "<td><img src='$caratula2' /></td><td><span>$nombre2</span></td><td><span>$precio2 € | $precioJP2 JP</span></td><td><span>$unidadesgame2</span></td><td><a href='http://localhost/juggernaut/public/borrargame?idgame=$game2'><img src='img/borrar.png' /></a></td>";
					echo "</tr>";
				}

					if($game3 != 0){
						$caratula3 = DB::table('games')->where('icodgame', $game3)->value('caratula');
				  	$nombre3 = DB::table('games')->where('icodgame', $game3)->value('game_name');
						$precio3 = DB::table('games')->where('icodgame', $game3)->value('precio');
						$precioJP3 = DB::table('games')->where('icodgame', $game3)->value('precio_jp');
						echo"<tr>";
						echo "<td><img src='$caratula3' /></td><td><span>$nombre3</span></td><td><span>$precio3 € | $precioJP3 JP</span></td><td><span>$unidadesgame3</span></td><td><a href='http://localhost/juggernaut/public/borrargame?idgame=$game3'><img src='img/borrar.png' /></a></td>";
						echo "</tr>";
					}



			echo "</table>";
			echo "</div>";


				echo "<div id='buttons'>";
				echo "<button type='button' class='btn-success' onclick='mostrarCajaDinero()'><span>Comprar con $precio_total €</span></button>";
				echo "<button type='button' class='btn-danger' onclick='mostrarCajaPuntos()'><span>Comprar con $precio_totalJP JP</span></button>";
				echo "</div>";

		}
       ?>

			 <div id = "cajaDinero">AJEJE</div>
			 <div id = "cajaPuntos">
				 <?php

				 	$userpoints = DB::table('users')->where('icoduser', $icoduser)->value('points');
					$resultadoglobal = $userpoints-$precio_totalJP;

					$codcompra = DB::table('compra')->where('icoduser', $icoduser)->value('icodcompra');

					if($resultadoglobal >= 0)
						echo "<p> $userpoints JP - $precio_totalJP JP --> $resultadoglobal JP</p>";
					else{
						echo "<p> $userpoints JP - $precio_totalJP JP --> <span class='text-danger'>$resultadoglobal JP</span></p>";
					}

				  ?>
				 <button class = "btn-danger" onclick = "validar()">Pagar</button>

			 </div>

		</div>

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

		<script>
		function mostrarCajaDinero()
		{
			document.getElementById('cajaPuntos').style.display = 'none';
			document.getElementById('cajaDinero').style.display = 'block';
		}
		</script>

		<script>
		function mostrarCajaPuntos()
		{
			document.getElementById('cajaDinero').style.display = 'none';
			document.getElementById('cajaPuntos').style.display = 'block';
		}

		function validar(){

			if(<?=$resultadoglobal?><0){
				alert('No tienes pasta pringao');
			}else{
				var ok = confirm('Estás seguro?');
				if(ok)
					window.location.href = 'http://localhost/juggernaut/public/crearfactura?money=<?=$resultadoglobal?>&&codcompra=<?=$codcompra?>';
			}

		}
		</script>
	</body>

</html>
