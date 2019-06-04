<html>
	<head>
		@include("layouts.code.links")
		@yield("links")

		<style type="text/css">
			#disabledbutton{
				background-color: rgba(145, 145, 145, 0.7);
				border-color: rgba(96, 96, 96, 1);

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
			<a href="http://localhost/juggernaut/public/tienda"><div class="activo seccion">Tienda</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!--<a href="login.html"><div class="float_der">Iniciar sesión</div></a>-->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")
		</nav>

		<div class="main" id="seccionjuego">
			<?php
				if(isset($_SESSION['logueado'])){
					if ($_SESSION['logueado']==false){
			?>

      			<?php
      		}else{

      		}

      	}
      	?>

          <?php
            $icodgame = $_GET['icodgame'];
						/*$nombreusuario = $_SESSION['nombre'];

						$puntos = DB::table('users')->where('name', $nombreusuario)->value('points');
						*/
            $resultado = DB::table('games')->where('icodgame', $icodgame)->get();

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

						?>
						<?php
						//echo "$puntos";
						echo "<div id = 'caratula'>";
						echo "<img src='$caratula'/>";
						echo "<div id = 'buttons'>";
						if(isset($_SESSION['logueado'])){
							if ($_SESSION['logueado']==false){
								echo "<button type='button' id='disabledbutton' class='btn-success' onclick='añadirCesta()' disabled><span>Comprar $precio € | $precioJP JP</span></button>";
								echo "<span>Para adquirir un videojuego es necesario iniciar sesión</span>";
							}else{
								echo "<button type='button' class='btn-warning' onclick='añadirCesta()'><span>Comprar $precio € | $precioJP JP</span></button>";
							}
						}
						echo "</div>";
						echo "</div>";
						echo "<div id='infojuego'>";
						echo "<h1>".$nombre."</h1>";
						echo "<h3>".$genero."</h3>";
						echo "<h3>Desarrollador: ".$desarrollador."</h3> ";
						echo "<p>".$descripcion."</p>";
						echo "<h3>Trailer:</h3>";
						echo"<video poster='img/jugger.png' controls muted autoplay loop />
							<source src='$trailer' type='video/mp4' />";
						echo "</div>";
           ?>

		</div>

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")
		<script languaje="javascript">
			function añadirCesta(){
				window.location.replace("http://localhost/juggernaut/public/agregargame?id=<?=$id?>");
			}
		</script>

	</body>
</html>
