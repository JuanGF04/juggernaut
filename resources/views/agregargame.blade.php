<?php

  session_start();

  $nombre =$_SESSION ['nombre'];
  $idgame=$_GET['id'];

  $icoduser = DB::table('users')->where('name', $nombre)->value('icoduser');
  $preciogame = DB::table('games')->where('icodgame', $idgame)->value('precio');
  $preciogame2 = DB::table('games')->where('icodgame', $idgame)->value('precio_jp');

  $checkgame1 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame1');
  $checkgame2 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame2');
  $checkgame3 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame3');

  if($checkgame1 == null || $idgame==$checkgame1){
    if($idgame == $checkgame1){

      $unidadesgame1 = DB::table('compra')->where('icoduser', $icoduser)->value('unidadesgame1');
      $realunidadesgame1 = $unidadesgame1+1;
      $preciogame = $realunidadesgame1*$preciogame;

      DB::table('compra')
        ->updateOrInsert(
            ['icoduser' => $icoduser],
            [ 'unidadesgame1'=> $realunidadesgame1, 'preciogame1'=> $preciogame]
            );
    }else{
      DB::table('compra')
        ->updateOrInsert(
            ['icoduser' => $icoduser],
            [ 'icodgame1'=> $idgame,  'preciogame1' => $preciogame,'preciojp1' => $preciogame2,'unidadesgame1'=> 1]
            );
    }

  }else if($checkgame2 == null) {
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame2'=> $idgame,  'preciogame2' => $preciogame, 'preciojp2' => $preciogame2 ]
          );
  }else if($checkgame3 == null){
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame3'=> $idgame,  'preciogame3' => $preciogame, 'preciojp3' => $preciogame2 ]
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
