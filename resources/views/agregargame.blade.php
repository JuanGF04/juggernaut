<?php

  session_start();

  $nombre =$_SESSION ['nombre'];
  $idgame=$_GET['id'];

  $icoduser = DB::table('users')->where('name', $nombre)->value('icoduser');
  $preciogame = DB::table('games')->where('icodgame', $idgame)->value('precio');
  $preciogamejp = DB::table('games')->where('icodgame', $idgame)->value('precio_jp');

  $checkgame1 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame1');
  $checkgame2 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame2');
  $checkgame3 = DB::table('compra')->where('icoduser', $icoduser)->value('icodgame3');

  if($checkgame1 == null || $idgame==$checkgame1){
    if($idgame == $checkgame1){

      $unidadesgame1 = DB::table('compra')->where('icoduser', $icoduser)->value('unidadesgame1');
      $realunidadesgame1 = $unidadesgame1+1;
      $preciogame = $realunidadesgame1*$preciogame;
      $preciogamejp = $realunidadesgame1*$preciogamejp;

      DB::table('compra')
        ->updateOrInsert(
            ['icoduser' => $icoduser],
            [ 'unidadesgame1'=> $realunidadesgame1, 'preciogame1'=> $preciogame, 'preciojp1' => $preciogamejp]
            );
    }else{
      DB::table('compra')
        ->updateOrInsert(
            ['icoduser' => $icoduser],
            [ 'icodgame1'=> $idgame,  'preciogame1' => $preciogame,'preciojp1' => $preciogamejp,'unidadesgame1'=> 1]
            );
    }

  }else if($checkgame2 == null || $idgame==$checkgame2) {
    if($idgame == $checkgame2){

      $unidadesgame2 = DB::table('compra')->where('icoduser', $icoduser)->value('unidadesgame2');
      $realunidadesgame2 = $unidadesgame2+1;
      $preciogame = $realunidadesgame2*$preciogame;
      $preciogamejp = $realunidadesgame2*$preciogamejp;

      DB::table('compra')
        ->updateOrInsert(
            ['icoduser' => $icoduser],
            [ 'unidadesgame2'=> $realunidadesgame2, 'preciogame2'=> $preciogame, 'preciojp2' => $preciogamejp]
            );
    }else{
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame2'=> $idgame,  'preciogame2' => $preciogame, 'preciojp2' => $preciogamejp, 'unidadesgame2'=> 1]
          );
    }
  }else if($checkgame3 == null || $idgame==$checkgame3){
    if($idgame == $checkgame3){

      $unidadesgame3 = DB::table('compra')->where('icoduser', $icoduser)->value('unidadesgame3');
      $realunidadesgame3 = $unidadesgame3+1;
      $preciogame = $realunidadesgame3*$preciogame;
      $preciogamejp = $realunidadesgame3*$preciogamejp;

      DB::table('compra')
        ->updateOrInsert(
            ['icoduser' => $icoduser],
            [ 'unidadesgame3'=> $realunidadesgame3, 'preciogame3'=> $preciogame, 'preciojp3' => $preciogamejp]
            );
    }else{
    DB::table('compra')
      ->updateOrInsert(
          ['icoduser' => $icoduser],
          [ 'icodgame3'=> $idgame,  'preciogame3' => $preciogame, 'preciojp3' => $preciogamejp, 'unidadesgame3' => 1]
          );
    }
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
