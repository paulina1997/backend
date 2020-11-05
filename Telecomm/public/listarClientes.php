<?php
include '../php/ClientesController.php';

$cliente=new clientes;
$listarClientes=$cliente->listarClientes();

echo json_encode($listarClientes);
?>