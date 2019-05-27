<?php
  session_start();

  $existsname = DB::table('users')->where('name', $_GET['nombre'])->value('icoduser');

  $_SESSION['malname'] = false;
  $_SESSION['malpass'] = false;
  $_SESSION['malcorreo'] = false;

  if(!isset($_GET['nombre']) || !isset($_GET['pass']) || !isset($_GET['repass'])|| !isset($_GET['mail'])){
    echo "No se reciben las cajas de parámetros";
  }
  if($_GET['nombre'] == '' || $existsname != null){
    $_SESSION['malname'] = true;
  }
  if($_GET['pass'] != $_GET['repass']){
    $_SESSION['malpass'] = true;
  }
  if(!filter_var($_GET['mail'], FILTER_VALIDATE_EMAIL)){
    $_SESSION['malcorreo'] = true;
  }

  if($_SESSION['malname'] == true || $_SESSION['malpass'] == true || $_SESSION['malcorreo'] == true ){
    header('Location: http://localhost/juggernaut/public/registro');
    die();
  }else{
    include("salt.inc.php");

    $name = $_GET['nombre'];
    $password=crypt($_GET['pass'],$salt);
    $mail = $_GET['mail'];

    DB::insert('insert into users (icoduser, name, password , mail, points)
    values (?, ?, ?, ?, ?)', array(0, $name, $password, $mail, 0));

    $getparameters = $name.'&&password='.$_GET['pass'];
    header("Location: http://localhost/juggernaut/public/login?username=$getparameters");
    die();
  }


?>
