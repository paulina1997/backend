<?php
include '../php/ClientesController.php';

$Id_cliente=$_POST['Id_cliente'];

$cliente=new Cliente;
$buscarClientes=$cliente->buscarClientes($Id_cliente);

echo json_encode($buscarClientes);

?>

