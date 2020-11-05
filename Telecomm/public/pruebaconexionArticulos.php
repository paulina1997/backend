<link href="assest/css/bootstrap.min.css" rel="stylesheet">

<?php
include '../php/ArticulosController.php';

$articulo=new Articulo;
$listarArticulos=$articulo->listarArticulos();
?>
<table class="table table-striped">
    <tr><th>sec.</th><th>id_Articulo</th><th>Nombre</th><th>Existencia</th><th>Caracteristicas</th><th>Precio</th><th>Costo</th><th>Reorden</th><th>Unidad</th></tr>
    <?php
if ($listarArticulos['exito']){
    //echo $listarUsuarios ['exito'];
    foreach($listarArticulos['articulo'] as $llave=>$valor){
        ?>
        <tr>
            <td>
                <?php ($llave+1); ?>
            </td>
                <?php foreach($valor as $key=>$articulo){ ?>
            <td>
                <?php echo $articulo; ?>
            </td>
                <?php }//fin de foreach II  ?>
         </tr>
         
        <?php
    }//fin de foreach
}//fin del if
else {
    ?>
    <tr><td colspan="5">no hay registros</td></tr>
   <?php
}
?>
</table>

<!--
<pre>
    <?php echo var_dump($listarArticulos); ?>

</pre>
-->