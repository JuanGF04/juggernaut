<?php

  if(!isset($_GET['nombre']) || !isset($_GET['price']) || !isset($_GET['JPprice'])||
      !isset($_GET['genero'])|| !isset($_GET['descripcion'])|| !isset($_GET['desarrollador'])){
    echo "No se reciben las cajas de parámetros";
	}else{


    $name = $_GET['nombre'];
    $precio = $_GET['price'];
    $precioJP = $_GET['JPprice'];
    $desarrollador = $_GET['desarrollador'];
    $genero = $_GET['genero'];
    $descripcion = $_GET['descripcion'];

    DB::insert('insert into games (icodgame, game_name, precio , precio_jp, desarrollador, genero, descripcion)
    values (?, ?, ?, ?, ?, ?, ?)', array(0, $name, $precio, $precioJP, $genero, $desarrollador, $descripcion));

    header('Location: http://localhost/juggernaut/public/adminJuegos');
    die();
  }


?>
