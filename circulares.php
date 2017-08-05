<?php 

try {
  $conexion = new PDO('mysql:host=localhost;dbname=lcr', 'root', 'darias87');
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$pagina = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$postPorPagina = 8;
//
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;
//
$circulares = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM circulares LIMIT $inicio, $postPorPagina");
//
$circulares->execute();
$circulares = $circulares->fetchAll();
//
$totalCirculares = $conexion->query('SELECT FOUND_ROWS() as total');
$totalCirculares = $totalCirculares->fetch()['total'];

$numeroPagina = ceil($totalCirculares / $postPorPagina);

require "views/circulares.view.php";

?>