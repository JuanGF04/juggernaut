<?php

  session_start();
  session_destroy();

  header('Location: http://localhost/juggernaut/public/tienda');
  die();

?>
