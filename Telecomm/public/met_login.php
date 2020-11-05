<?php
  include '../php/UsuariosController.php';
  foreach($_POST as $key=>$valor){
     $$key=$valor;
  }
 
  $password=sha1($password);
  $usuarios=new Usuarios;
  $login=$usuarios->login($usuario,$password);
  echo json_encode($login);
  
  ?>
  
 