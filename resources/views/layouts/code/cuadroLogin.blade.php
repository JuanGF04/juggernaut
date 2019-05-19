<script type="text/javascript">
// Add slideDown animation to Bootstrap dropdown when expanding.
$('.dropdown').on('show.bs.dropdown', function() {
$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});
</script>
<?php

  if(!isset($_SESSION['logueado']))
    $_SESSION['logueado']=false;

  if($_SESSION['logueado']==false){
?>
<div id="claseformulario" class="seccion">
  <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button">Iniciar sesión<span class="caret"></span></a>
        <div class="dropdown-menu" id="formlogin">
          <div class="row">
              <div class="container-fluid">
                  <form class="" method="get" action="http://localhost/juggernaut/public/login">
                      <div class="form-group">
                        <label class="">Nombre de usuario</label>
                          <input class="form-control" name="username" id="username" type="text">
                      </div>
                      <div class="form-group">
                        <label class="">Contraseña</label>
                          <input class="form-control" name="password" id="password" type="password">
                          <br class="">
                      </div>
                      <?php
                        if(isset($_SESSION['fallolog'])){
                          if($_SESSION['fallolog']==true){
                            echo "<p class='text-danger'>Fallo al iniciar sesión</p>";
                          }
                        }
                       ?>
                        <button type="submit" id="btnLogin" class="btn btn-danger btn-sm">Login</button>
                      </form>
                      <div class="dropdown-divider"></div>
                      ¿No tienes una cuenta aún? <a class="text-danger" href="http://localhost/juggernaut/public/registro">Regístrate</a>

                </div>
          </div>
        </div>
      </div>
  <?php
    #ESTAS LOGUEADO
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
                        <div><img width="10%" src="img/jugger.ico"></div>
                        <div id='points'>
                          <?php
                            $nombrecito = $_SESSION['nombre'];
                            //PARA 1 VALOR
                            $puntuacion = DB::table('users')->where('name', $nombrecito)->value('points');
                            //PARA VARIOS

                            echo $puntuacion;
                           ?>
                        </div>
                        <a class="text-danger" href="http://localhost/juggernaut/public/carrocompra">MI CESTA</a>

                        <div class="dropdown-divider"></div>
                        <a class="text-danger" href="http://localhost/juggernaut/public/cerrarsesion">Cerrar sesión</a>
                  </div>
            </div>
          </div>
        </div>

        <?php
          }
        ?>


        <?php

          #$id = $_GET['id'];

          #$consulta = select * from juego where id;
          #$consulta2 = select * from juego where fecha>17-04-2019 24:00:00;

          #for($id=1; ;i<10){
            #$nombre = select nombre where id=$id ;
            #echo "<h1>$nombre</h1>"
            #echo "<a href='http://localhost/juggernaut/public/juegos?id=$id'></a>"
          #}


         ?>
