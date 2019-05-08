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
			<a href="http://localhost/juggernaut/public/eventos"><div class="seccion">Inicio</div></a>
			<a href="http://localhost/juggernaut/public/eventos"><div class="seccion">Eventos</div></a>
			<a href="http://localhost/juggernaut/public/rankings"><div class="seccion">Rankings</div></a>
			<a href="http://localhost/juggernaut/public/tienda"><div class="activo seccion">Tienda</div></a>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!--<a href="login.html"><div class="float_der">Iniciar sesión</div></a>-->
			@include("layouts.code.cuadroLogin")
			@yield("cuadroLogin")
		</nav>

		<div class="main" style= "height: 70%;">
			<?php
				if(isset($_SESSION['logueado'])){
					if ($_SESSION['logueado']==false){
			?>

      			<?php
      		}else{

      		}

      	}
      	?>
        <div id='infojuego'>
          <?php
            $icodgame = $_GET['icodgame'];

            $resultado = DB::table('games')->where('icodgame', $icodgame)->get();

            foreach ($resultado as $mostrar) {
							$id = $mostrar->icodgame;
							$nombre = $mostrar->game_name;
							$precio = $mostrar->precio;

              echo $id.$nombre.$precio;
            }


           ?>
        </div>
		</div>

		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
