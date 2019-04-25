<?php

  session_start();

  if( !isset($_GET['username']) ||  !isset($_GET['password']) ){
        header('Location: http://localhost/juggernaut/public');
        die();
  }else{

  include("salt.inc.php");

  //ESTO ES LO QUE LE PASO POR FORMULARIO
  $user_noverify = $_GET['username'];
  $pass_noverify = crypt($_GET['password'],$salt);

  //ESTO ES LO QUE ESTÁ EN LA BBDD
  $user = DB::table('users')->where('name', $user_noverify)->value('name');
  $pass = DB::table('users')->where('name', $user_noverify)->value('password');

  //comprobacion si es ok
  if($user_noverify == $user && $pass_noverify == $pass){
    $_SESSION['nombre'] = $_GET['username'];
    $_SESSION['password'] = $_GET['password'];
    $_SESSION['info'] = $_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'];
    $_SESSION['logueado'] = true;

    header('Location: http://localhost/juggernaut/public/');
    die();

    //sino doy el error
  }else{
    $_SESSION['fallolog']=true;
    header('Location: http://localhost/juggernaut/public/');
    die();
  }
  }


 ?>
