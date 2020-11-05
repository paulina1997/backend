<?php
include '../php/ServiciosController.php';

foreach ($_POST as $key=>$value){
    $$key=$value;
}

$servicio=new servicio;
$agregarServicio=$servicio->agregarServicios($Id_servicio,$tipo_servicio,$Descripcion,$Precio,$costo,$Id_articulo);

echo json_encode($agregarServicio);

?>

<pre><?php echo var_dump($_POST);?></pre>