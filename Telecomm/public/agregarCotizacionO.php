<?php
include '../php/CotizacionController.php';

foreach ($_POST as $key=>$value){
    $$key=$value;
}

$cotizacion=new Cotizacion;
$agregarCotizacion=$cotizacion->agregarCotizacion($Id_orden,$Id_servicio,$Id_cliente);

echo json_encode($agregarCotizacion);

?>

<pre><?php echo var_dump($_POST);?></pre>