<?php

session_start();

  $nombre =$_SESSION ['nombre'];
  $icoduser = DB::table('users')->where('name', $nombre)->value('icoduser');

  $idgame=$_GET['idgame'];

  //YO AQUI HARIA UN FOREACH


  $icodgame1 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame1');
  $preciogame1 = DB::table('compra')->where('icoduser', $icoduser)->value('preciogame1');
  $icodgame2 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame2');
  $preciogame2 = DB::table('compra')->where('icoduser', $icoduser)->value('preciogame2');
  $icodgame3 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame3');
  $preciogame3 = DB::table('compra')->where('icoduser', $icoduser)->value('preciogame3');

  if($icodgame1 == $idgame){
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame1'=> $icodgame2,  'preciogame1' => $preciogame2, 'icodgame2'=> $icodgame3,  'preciogame2' => $preciogame3, 'icodgame3'=> 0,  'preciogame3' => 0]
          );
      echo "borrame";
  }else if($icodgame2 == $idgame){
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame2'=> $icodgame3,  'preciogame2' => $preciogame3, 'icodgame3'=> 0,  'preciogame3' => 0]
          );
      echo "borrame";
  }else if($icodgame3 == $idgame){
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame3'=> 0,  'preciogame3' => 0]
          );
      echo "borrame";
  }else{
    header('Location: http://localhost/juggernaut/public/carrocompra');
    die();
  }


  header('Location: http://localhost/juggernaut/public/carrocompra');
  die();

 ?>
