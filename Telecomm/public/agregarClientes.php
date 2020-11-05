<?php
include '../php/ClientesController.php';

foreach ($_POST as $key=>$value){
    $$key=$value;
}

$clientes=new clientes;
$agregarCliente=$clientes->agregarClientes($Id_clientes,$nombre_empresa,$telefono,$direccion,$nombre_contacto,$Correo_Electronico);

echo json_encode($agregarCliente);

?>

<pre><?php echo var_dump($_POST);?></pre>