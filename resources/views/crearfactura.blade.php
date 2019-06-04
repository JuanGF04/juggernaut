<?php

  session_start();

  $name = $_SESSION['nombre'];
  $icoduser = DB::table('users')->where('name', $name)->value('icoduser');

  $dinerorestante =  $_GET['money'];
  $codcompra = $_GET['codcompra'];

  $userpoints = DB::table('users')->where('icoduser', $icoduser)->value('points');

  $dinerofactura = $userpoints-$dinerorestante ;

  //UPDATE DE LOS PUNTOS RESTANTES
  DB::table('users')
              ->where('icoduser', $icoduser)
              ->update(['points' => $dinerorestante]);
  //CREAR LA FACTURA
  date_default_timezone_set("Europe/Madrid");
  $hoy = date("Y-m-d H:i:s");
  DB::table('facturas')->insert(
    ['cod_factura' => 0, 'cod_user' => $icoduser,  'fecha_compra' => $hoy, 'precio_jp' => $dinerofactura]
    );
  //BORRAR EL CARRO DE LA COMPRA
  DB::table('compra')->where('icodcompra', $codcompra)->delete();
  header('Location: http://localhost/juggernaut/public');
  die();
 ?>
