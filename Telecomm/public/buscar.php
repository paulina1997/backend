<?php
include '../php/ArticulosController.php';

$Id_articulo=$_POST['Id_articulo'];

$articulo=new Articulo;
$buscarArticulos=$articulo->buscarArticulos($Id_articulo);

echo json_encode($buscarArticulos);

?>

