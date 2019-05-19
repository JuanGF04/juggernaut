<?php

  session_start();

  $nombre =$_SESSION ['nombre'];
  $idgame=$_GET['id'];

  $icoduser = DB::table('users')->where('name', $nombre)->value('icoduser');
  $preciogame = DB::table('games')->where('icodgame', $idgame)->value('precio');

  $checkgame1 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame1');
  $checkgame2 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame2');
  $checkgame3 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame3');

  if($checkgame1 == null){
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame1'=> $idgame,  'preciogame1' => $preciogame]
          );
  }else if($checkgame2 == null) {
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame2'=> $idgame,  'preciogame2' => $preciogame]
          );
  }else if($checkgame3 == null){
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame3'=> $idgame,  'preciogame3' => $preciogame]
          );
  }else{
    echo "ya esta petao";
  }


/*
  for(int $i=1;$i<4;$i++){
    if($checkgame$i != null){
      DB::table('compra')
        ->updateOrInsert(
            ['icoduser' => $icoduser],
            [ 'icodgame'.$i => $idgame,  'preciogame'.$i => $preciogame]
      );
    }
    }
    */

  header('Location: http://localhost/juggernaut/public/carrocompra');
  die();

 ?>
