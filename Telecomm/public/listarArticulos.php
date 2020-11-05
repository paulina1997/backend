<?php
include '../php/ArticulosController.php';

$articulo=new articulo;
$listarArticulos=$articulo->listarArticulos();

echo json_encode($listarArticulos);
?>