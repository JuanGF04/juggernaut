<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class controllerMain extends Controller
{

  public function index(){
    return view ("welcome");
  }

  public function eventos(){
    return view ("eventos");
  }

  public function rankings(){
    return view ("rankings");
  }

  public function tienda(){
    return view ("tienda");
  }

  public function foros(){
    return view ("foros");
  }

  public function login(){
    return view ("login");
  }

  public function registro(){
    return view ("registro");
  }

  public function createuser(){
    return view ("createuser");
  }

  public function cerrarsesion(){
    return view ("cerrarsesion");
  }

  public function juego(){
    return view ("juego");
  }
  public function agregargame(){
    return view ("agregargame");
  }
  public function carrocompra(){
    return view ("carrocompra");
  }

  public function borrargame(){
    return view ("borrargame");
  }

  public function adminJuegos(){
    return view ("adminJuegos");
  }

  public function añadirJuego(){
    return view ("añadirJuego");
  }

  public function borrarJuego(){
    return view ("borrarJuego");
  }

  public function crearfactura(){
    return view ("crearfactura");
  }

}

?>
