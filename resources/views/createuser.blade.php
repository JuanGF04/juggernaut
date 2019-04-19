<?php

  if(!isset($_GET['nombre']) || !isset($_GET['pass']) || !isset($_GET['repass'])|| !isset($_GET['mail'])){
    echo "No se reciben las cajas de parámetros";
  }
  else if($_GET['pass'] != $_GET['repass']){
		echo "Las contraseñas no coinciden<br/>";
	}else{

    include("salt.inc.php");

    $name = $_GET['nombre'];
    $password=crypt($_GET['pass'],$salt);
    $mail = $_GET['mail'];

    DB::insert('insert into users (icoduser, name, password , mail)
    values (?, ?, ?, ?)', array(0, $name, $password, $mail));

    header('Location: http://localhost/juggernaut/public');
    die();
  }


?>
