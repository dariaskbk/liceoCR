<?php session_start();

  ini_set('date.timezone', 'America/Costa_Rica');

  $fecha = date('Y-m-d');

  require "views/index.view.php";

?>