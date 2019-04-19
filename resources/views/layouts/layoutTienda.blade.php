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
			<a href="http://localhost/juggernaut/public/eventos"><div class="seccion">Eventos</div></a>
			<a href="http://localhost/juggernaut/public/rankings"><div class="seccion">Rankings</div></a>
			<div class="activo seccion">Juegos</div>
			<a href="http://localhost/juggernaut/public/foros"><div class="seccion">Foros</div></a>
			<!-- <a href="login.html"><div class="float_der">Iniciar sesión</div></a> -->
			<?php

        if(!isset($_SESSION['logueado']))
          $_SESSION['logueado']=false;

        if($_SESSION['logueado']==false){
      ?>
			<div id="claseformulario" class="seccion">
      	<a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button">SIGN-IN<span class="caret"></span></a>
              <div class="dropdown-menu" id="formlogin">
                <div class="row">
                    <div class="container-fluid">
                        <form class="" method="get" action="http://localhost/juggernaut/public/login">
                            <div class="form-group">
                              <label class="">Username</label>
                                <input class="form-control" name="username" id="username" type="text">
                            </div>
                            <div class="form-group">
                              <label class="">Password</label>
                                <input class="form-control" name="password" id="password" type="password">
                                <br class="">
                            </div>
                            	<button type="submit" id="btnLogin" class="btn btn-danger btn-sm">Login</button>
                            </form>
														<div class="dropdown-divider"></div>
														¿No tienes una cuenta aún? <a href="http://localhost/juggernaut/public/registro">Regístrate</a>

                      </div>
                </div>
              </div>
						</div>
				<?php
              }else{
        ?>
				<div id="claseformulario" class="seccion">
	      	<a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button">
						<?php
							echo $_SESSION['nombre'];
						 ?>
						<span class="caret"></span></a>
	              <div class="dropdown-menu" id="formlogin">
	                <div class="row">
	                    <div class="container-fluid">
	                        <form class="" method="get" action="http://localhost/juggernaut/public/login">
	                            <div class="form-group">
	                              <label class="">Username</label>
	                                <input class="form-control" name="username" id="username" type="text">
	                            </div>
	                            <div class="form-group">
	                              <label class="">Password</label>
	                                <input class="form-control" name="password" id="password" type="password">
	                                <br class="">
	                            </div>
	                            	<button type="submit" id="btnLogin" class="btn btn-danger btn-sm">Login</button>
	                            </form>
															<div class="dropdown-divider"></div>
															¿No tienes una cuenta aún? <a href="http://localhost/juggernaut/public/registro">Regístrate</a><br/>
															<a href="http://localhost/juggernaut/public/cerrarsesion">Cerrar sesión</a>

	                      </div>
	                </div>
	              </div>
							</div>

							<?php
                }
              ?>


		</nav>
		<div class="main">
			<div class="seccion2">
			<header><span>Más populares</span></header>
				<table>
					<tr>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
					</tr>
					<tr>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
						<td><img src="img/juego1.jpg"><h3>Fortnite</h3></td>
					</tr>
				</table>
			</div>

			<div class="seccion2">
			<header><span></span></header>
				<table>
					<tr>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
					</tr>
					<tr>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
						<td><img src="img/juego2.jpg"><h3>Dark Souls 3</h3></td>
					</tr>
				</table>
				<div class="pie_seccion"><a href="http://www.google.es">Ver más</a></div>
			</div>

			<div class="seccion2">
			<header><span>Descargables</span></header>
				<table>
					<tr>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
					</tr>
					<tr>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
						<td><img src="img/juego3.jpg"><h3>Hexagon</h3></td>
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
			</div>
			<div>
				<span class="enlace">Política de cookies</span>
				<span class="enlace">Información legal</span>
			</div>
		</footer>

		<div class="flecha">
			<a href="#top"><img src="img/flecha.png"></a>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>
