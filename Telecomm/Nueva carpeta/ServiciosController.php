<?php
# aqio se den todas las acciones CRUD
include 'conexion.inc.php';
//ini_set('display_errors',0);
class servicio extends Conectar {
    //todo
    private $db;
    
    public function __construct(){
        $this->db=parent::conexion();
    }
    #metodo para consultar(R)
    public function listarServicios(){
        
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
        $sqlServicios='SELECT Id_servicio,tipo_servicio,costo,Id_articulo,Descripcion,Precio FROM servicios';
        $rstServicios=$this->db->Execute($sqlServicios);
        
        # crear variables de regreso
        $aMensaje=[];
        $aMensaje['exito']=false; //$aMensaje=['exito'=>false];
        $aMensaje['servicio']=[];
        # si hay usuarios crear la extraccion del recordset
        $aServicio=[];
        if ($rstServicios){
            $aMensaje['exito']=true;
            while(!$rstServicios->EOF){
                $aServicio[]=array(
                    'Id_servicio'=>$rstServicios->fields('Id_servicio'),
                    'tipo_servicio'=>$rstServicios->fields('tipo_servicio'),
                    'Descripcion'=>$rstServicios->fields('Descripcion'),
                    'Precio'=>$rstServicios->fields('Precio'),
                    'costo'=>$rstServicios->fields('costo'),
                    'Id_articulo'=>$rstServicios->fields('Id_articulo'),
                );//fin fel array
                $rstServicios->MoveNext();
                
            }//fin del while
            $aMensaje['servicio']=$aServicio;
            
        }//fin del if
        return $aMensaje;
        
    }// fin del function
    
    
    public function agregarServicios($Id_servicio,$tipo_servicio,$Descripcion,$Precio,$costo,$Id_articulo)
    {
      $sqlServicios="INSERT INTO catalogo_de _servicios (Id_servicio,tipo_servicio,Descripcion,Precio,costo,Id_articulo) VALUES ('$Id_servicio','$tipo_servicio','$Descripcion','$Precio','$costo','$Id_articulo')";
        
        #crear varaibles de regreso
        $amensaje=[];
        $amensaje['exito']=false;
        
        $rstServicios=$this->db->Execute($sqlServicios);
        if($rstServicios)
        {
            $amensaje['exito']=true;
        }//fin del if
        return $amensaje;
    }//fin de funcion agregarusuario
    
        public function buscarServicio($Id_servicio)
    {
      $sqlArticulos="SELECT Id_servicio,tipo_servicio,Descripcion,Precio,costo,Id_articulo FROM catalogo_de _servicios WHERE Id_servicio='$Id_servicio'";
        
        #crear varaibles de regreso
        $amensaje=[];
        $amensaje['exito']=false;
        $amensaje['Id_servicio']=$Id_servicio;
        $rstServicios=$this->db->Execute($sqlServicios);
        if($rstServicios->RecordCount())
        {
            $amensaje['exito']=true;
        }//fin del if
        return $amensaje;
    }//fin de funcion agregarusuario
}
?>