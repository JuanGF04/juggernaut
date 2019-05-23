<html>
	<head>
@include("layouts.code.links")
@yield("links")

		<style type="text/css">
      h1{
        text-align: center;
      }

      h2{
        margin-left: 20%;
        margin-top: 3%;
        font-family: graceland;
      }

      #cuadroForm{
        width: 50%;
        margin-left: 25%;
      }

      #labelForm{
        color: black;
      }

      table{
        margin-left: 10%;
        margin-top: 3%;
        width: 80%;
      }

      table tr:nth-child(1){
        font-size: 2vw;
      }

      table tr:nth-child(1) td:nth-last-child(1){
        border: none;
      }
      table tr td{
        border: 2px solid;
      }
      table tr td:nth-child(1){
        width: 2%;
      }
      table tr td a{
        width: 2vw;
        height: 2vh;
      }
      table tr td a img{
        width: 100%;
        height: 100%;
      }
      table tr td a img:hover{
        transform: scale(1.1);
      }

      table tr td:nth-last-child(1){
        width: 4.5%;
      }

      #botonAñadir{
        border-color: rgba(200, 0, 0 , 1);
        background-color: rgba(200, 0 ,0 , .5);
        color: white;
      }

      #botonAñadir:hover{
        background-color: rgba(200, 0 ,0 , 1);
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
        if(!isset($_SESSION['nombre']) || $_SESSION['nombre'] != "admin" ){
          echo "<h1>Tú quién eres crack? Fuera de aquí anda</h1>";
        }else{
      ?>
      <h2>Agrega un Juego:</h2>
      <div id="cuadroForm">
      <form class="needs-validation" novalidate method="get" action="http://localhost/juggernaut/public/añadirJuego">
        <div class="form-group">
          <div class="col-sm-12">
            <label for="name" id="labelForm">Nombre del juego</label>
            <input class="form-control" type="text" name="nombre" required/><br/>
          </div>

          <div class="col-sm-12 mt-3">
            <label for="name" id="labelForm">Precio</label>
            <input class="form-control" type="number" name="price" required/><br/>
          </div>

          <div class="col-sm-12 mt-3">
            <label for="name" id="labelForm">Precio Juggernaut Points</label>
            <input class="form-control" type="number" name="JPprice" required/><br/>
          </div>

          <div class="col-sm-12 mt-3">
            <label for="name" id="labelForm">Desarrollador</label>
            <input class="form-control" type="text" name="desarrollador" required/><br/>
          </div>

          <div class="col-sm-12 mt-3">
            <label for="name" id="labelForm">Género</label>
            <input class="form-control" type="text" name="genero" required/><br/>
          </div>
          <div class="col-sm-12 mt-3">
            <label for="name" id="labelForm">Descripción</label>
            <input class="form-control" type="text" name="descripcion" required/><br/>
          </div>
        <button class="ml-3 mt-3 btn " type="submit" id="botonAñadir">Añadir</button>
        </div>
      </div>

       <?php

         $resultado = DB::table('games')->get();

         echo "<table>";
         echo "<tr><td>Código</td><td>Nombre</td><td>Precio</td><td>Precio JP</td><td></td></tr>";

         foreach ($resultado as $mostrar) {
           $id = $mostrar->icodgame;
           $nombre = $mostrar->game_name;
           $precio = $mostrar->precio;
           $precioJP = $mostrar->precio_jp;

         echo "<tr>
                 <td>$id</td>
                 <td>$nombre</td>
                 <td>$precio €</td>
                 <td>$precioJP</td>
                 <td><a onclick='borrarJuego()'><img src='img/borrar.png' /></a></td>
               </tr>";
         }

         echo"</table></br>";

       ?>
       <script languaje="javascript">
         function borrarJuego(){
           var opcion = confirm("¿Estás seguro?");
           if(opcion == true){
             window.location.replace("http://localhost/juggernaut/public/borrarJuego?icodgame=<?=$id?>");
           }else{
             return false;
           }
         }
       </script>
       <?php
         }
        ?>
		</div>



		@include("layouts.code.footer")
		@yield("footer")

		@include("layouts.code.scripts")
		@yield("scripts")

	</body>
</html>
