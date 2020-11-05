<?php
/*
 *es el script para conectar MySql con funciones nativas
 */
$conn=mysqli_connect('localhost','root','','telecomm') or die('Error en conexion');
$sqlArticulos='SELECT id_Articulo,Nombre,Existencia,Caracteristicas,Precio,Costo,Reorden,Unidad FROM articulos';
$qryArticulos=mysqli_query($conn,$sqlArticulos) or die('Error en consulta');
?>
<table>
    <tr><td>id_Articulo</td><td>Nombre</td><td>Existencia</td><td>Caracteristicas</td><td>Precio</td><td>Costo</td><td>Reorden</td><td>Unidad</td></tr>
</table>
<?php
if(mysqli_num_rows($qryArticulos)){

while($renglon=mysqli_fetch_array($qryArticulos))
{
    ?>
    <tr>
    <td><?php echo $renglon['id_Articulo'];?></td>
    <td><?php echo $renglon['Nombre'];?></td>
    <td><?php echo $renglon['Existencia'];?></td>
    <td><?php echo $renglon['Caracteristicas'];?></td>
    <td><?php echo $renglon['Precio'];?></td>
    <td><?php echo $renglon['Costo'];?></td>
    <td><?php echo $renglon['Reorden'];?></td>
    <td><?php echo $renglon['Unidad'];?></td>
    </tr>
   <?php
}//fin de while
}//fin del if
else{
    ?>
    <tr><td colspan="4">No Hay Registros</td></tr>
    <?php
}
?>
<pre>
    <?php //echo var_dump($queryUsuarios);?>
</pre>
