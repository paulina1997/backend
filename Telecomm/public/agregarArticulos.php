<?php
include '../php/ArticulosController.php';

foreach ($_POST as $key=>$value){
    $$key=$value;
}

$articulo=new Articulo;
$agregarArticulo=$articulo->agregarArticulos($Id_articulo,$Nombre,$Existencia,$Caracteristicas,$Precio,$Costo,$Reorden,$Unidad);

echo json_encode($agregarArticulo);

?>

<pre><?php echo var_dump($_POST);?></pre>