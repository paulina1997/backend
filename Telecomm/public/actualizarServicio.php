<?php
// script para hacer uso del metodo agregar Usuario
 include '../php/ServiciosController.php';
  
 /**/
 foreach($_POST as $key=>$value){
    $$key=$value;
 }
 //$id=$_POST['usuario'];
 //echo $usuario;
 # tratamiento especial para password
 //$password=sha1($password);
 
 # tratamiento especial para foto
 //$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
 
$servicio=new Servicio;
$editarServicio=$servicio->editarServicio($Id_servicio,$tipo_servicio,$Descripcion,$Precio,$costo,$Id_articulo);

  //echo $editarUsuario;
  echo json_encode($editarServicio);

?>
