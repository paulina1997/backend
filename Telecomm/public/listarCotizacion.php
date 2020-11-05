<?php
include '../php/CotizacionController.php';

$cotizacion=new Cotizacion;
$listarCotizacion=$cotizacion->listarCotizacion();

echo json_encode($listarCotizacion);
?>