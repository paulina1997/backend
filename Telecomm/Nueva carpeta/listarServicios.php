<?php
include '../php/ServiciosController.php';

$servicio=new servicio;
$listarServicios=$servicio->listarServicios();

echo json_encode($listarServicios);
?>