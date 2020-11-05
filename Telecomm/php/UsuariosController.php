<?php
# aqui se den todas las acciones CRUD
include 'conexion.inc.php';
ini_set('display_errors',0);
class Usuarios extends Conectar {
   // TODO
   private $db;
   
   public function __construct(){
      session_start();
     $this->db=parent::conexion();
   }
         # metodo login
  public function login($id,$password){
   //session_start(); se  movio para hacerla global
    $sqlUsuario="SELECT id,nombre,rol
                 FROM usuarios
                 WHERE id='$id'
                 AND password='$password'";
     # crear variables de regreso
    $aMensaje=[];
    $aMensaje['exito']=false;
    $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
    $rstUsuario=$this->db->Execute($sqlUsuario);
     if($rstUsuario->RecordCount()){
        $aMensaje['exito']=true;
        # crear asosciados en $_SESSION
        $_SESSION['rol']=$rstUsuario->fields('rol'); 
        $_SESSION['nombre']=$rstUsuario->fields('nombre');
        $_SESSION['token']='#$%^123a.';
     }
     else {
      # crear asosciados en $_SESSION
        $_SESSION['rol']=0;
        $_SESSION['nombre']='';
        $_SESSION['token']='';
      
     }
     return $aMensaje;
   }
    
} // fin clase Usuarios// fin clase Usuarios




?>