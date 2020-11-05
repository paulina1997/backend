<link href="assest/css/bootstrap.min.css" rel="stylesheet">

<?php
include '../php/ClientesController.php';

$clientes=new clientes;
$listarClientes=$clientes->listarClientes();
?>
<table class="table table-striped">
    <tr><th>sec.</th><th>Id_clientes</th><th>nombre_empresa</th><th>telefono</th><th>direccion</th><th>nombre_contacto</th><th>Correo_Electronico</th></tr>
    <?php
if ($listarClientes['exito']){
    //echo $listarUsuarios ['exito'];
    foreach($listarClientes['cliente'] as $llave=>$valor){
        ?>
        <tr>
            <td>
                <?php ($llave+1); ?>
            </td>
                <?php foreach($valor as $key=>$clientes){ ?>
            <td>
                <?php echo $clientes; ?>
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
    <?php echo var_dump($listarClientes); ?>

</pre>
-->