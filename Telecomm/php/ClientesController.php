<?php
# aqio se den todas las acciones CRUD
include 'conexion.inc.php';
//ini_set('display_errors',0);
class clientes extends Conectar {
    //todo
    private $db;
    
    public function __construct(){
        $this->db=parent::conexion();
    }
    #metodo para consultar(R)
    public function listarClientes(){
        
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
        $sqlClientes='SELECT Id_clientes,nombre_empresa,telefono,direccion,nombre_contacto,Correo_Electronico FROM clientes';
        $rstCliente=$this->db->Execute($sqlClientes);
        
        # crear variables de regreso
        $aMensaje=[];
        $aMensaje['exito']=false; //$aMensaje=['exito'=>false];
        $aMensaje['clientes']=[];
        # si hay usuarios crear la extraccion del recordset
        $aClientes=[];
        if ($rstCliente){
            $aMensaje['exito']=true;
            while(!$rstCliente->EOF){
                $aClientes[]=array(
                    'Id_clientes'=>$rstCliente->fields('Id_clientes'),
                    'nombre_empresa'=>$rstCliente->fields('nombre_empresa'),
                    'telefono'=>$rstCliente->fields('telefono'),
                    'direccion'=>$rstCliente->fields('direccion'),
                    'nombre_contacto'=>$rstCliente->fields('nombre_contacto'),
                    'Correo_Electronico'=>$rstCliente->fields('Correo_Electronico'),
                    
                );//fin fel array
                $rstCliente->MoveNext();
                
            }//fin del while
            $aMensaje['clientes']=$aClientes;
            
        }//fin del if
        return $aMensaje;
        
    }// fin del function
    
    public function agregarClientes($Id_clientes,$nombre_empresa,$telefono,$direccion,$nombre_contacto,$Correo_Electronico)
    {
      $sqlClientes="INSERT INTO clientes (Id_clientes,nombre_empresa,telefono,direccion,nombre_contacto,Correo_Electronico) VALUES ('$Id_clientes','$nombre_empresa','$telefono','$direccion','$nombre_contacto','$Correo_Electronico')";
        
        #crear varaibles de regreso
        $aMensaje=[];
        $aMensaje['exito']=false;
        
        $rstCliente=$this->db->Execute($sqlClientes);
        if($rstCliente)
        {
            $aMensaje['exito']=true;
        }//fin del if
        return $aMensaje;
    }//fin de funcion agregarusuario
}

?>