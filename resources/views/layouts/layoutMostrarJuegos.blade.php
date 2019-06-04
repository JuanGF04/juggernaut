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
			<!-- <a href="login.html"><div class="float_der">Iniciar sesión</div></a> -->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")


		</nav>
		<div class="main">
			<div class="seccion2">


					<?php

            $orden = $_GET['orden'];
            if($orden == 1){
            echo "<header><div><span>Más populares</span></div></header>";
						$resultado = DB::table('games')->orderBy('popularidad', 'desc')->get();
            }
            else if($orden == 2){
            echo "<header><div><span>Ranking de juegos Juggernaut</span></div></header>";
            $resultado = DB::table('games')->orderBy('jugg_value', 'desc')->get();
            }
            else if($orden == 3){
            echo "<header><div><span>Últimos lanzamientos</span></div></header>";
            $resultado = DB::table('games')->orderBy('fecha_lanzamiento', 'desc')->get();
            }

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
          <div class="pie_seccion" style:"width:100%; height: 50vh;"></div>
        </div>
      </div>


		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
