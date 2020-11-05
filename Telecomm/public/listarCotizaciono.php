<?php
include '../php/CotizacionController.php';

$cotizar=new cotizar;
$listarCotizacion=$cotizar->listarCotizacion();

echo json_encode($listarCotizacion);
?>