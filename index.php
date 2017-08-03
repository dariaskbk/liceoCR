<?php session_start();

  ini_set('date.timezone', 'America/Costa_Rica');

  $fecha = date('Y-m-d');

  if (!$_SESSION['Nombre']) { 
		// Llama a la vista para el login
		require "views/login.view.php";
	}

  require "views/index.view.php";

?>