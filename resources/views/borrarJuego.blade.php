<?php
  $icodgame = $_GET['icodgame'];
  DB::table('games')->where('icodgame', $icodgame)->delete();

  header('Location: http://localhost/juggernaut/public/adminJuegos');
  die();
 ?>
