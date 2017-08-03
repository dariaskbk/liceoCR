<?php session_start();


if ($_SESSION['Nombre']) { 
	// ya esta loggeado
}else{
	// Llama a la vista para el login
	require "views/login.view.php";
}

require "views/contacto.view.php";

?>