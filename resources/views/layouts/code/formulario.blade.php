<?php
session_start();
//Mostramos los errores al usuario
if(isset($_SESSION['malname'])){
  if($_SESSION['malname']==true){
    echo "<div class='alert alert-danger mt-2' role='alert'>
      Nombre no disponible.
    </div>";
  }
}
  if(isset($_SESSION['malpass'])){
    if($_SESSION['malpass']==true){
      echo "<div class='alert alert-danger mt-2' role='alert'>
        Las contraseñas no coinciden.
      </div>";
    }
  }

  if(isset($_SESSION['malcorreo'])){
  if($_SESSION['malcorreo']==true){
    echo "<div class='alert alert-danger mt-2' role='alert'>
      El formato de correo no es válido, prueba ejemplo@ejemplo.com .
    </div>";
    
  }
}

 ?>



<div id="formReg">
<form class="needs-validation" novalidate method="get" action="http://localhost/juggernaut/public/createuser">
  <div class="form-group">
    <div class="col-sm-12">
      <label for="name" id="labelForm">Nombre</label>
      <input class="form-control" type="text" name="nombre" required/><br/>
    </div>

    <div class="col-sm-12 mt-3">
      <label for="name" id="labelForm">Contraseña</label>
      <input class="form-control" type="password" name="pass" required/><br/>
    </div>
    <div class="col-sm-12 mt-3">
      <label for="name" id="labelForm">Confirma contraseña</label>
      <input class="form-control" type="password" name="repass" required/><br/>
    </div>
    <div class="col-sm-12 mt-3">
      <label for="name" id="labelForm">Email</label>
      <input class="form-control" type="email" name="mail" required/><br/>
    </div>
  <button class="ml-3 mt-3 btn btn-outline-light" type="submit">Registro</button>
  </div>
</form>
</div>
