<?php
# aqio se den todas las acciones CRUD
include 'conexion.inc.php';
//ini_set('display_errors',0);
class Cotizacion extends Conectar {
    //todo
    private $db;
    
    public function __construct(){
        $this->db=parent::conexion();
    }
    #metodo para consultar(R)
    public function listarCotizacion(){
        
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
        $sqlCotizacion='SELECT id_orden,id_servicio,id_clientes FROM cotizaciones';
        $rstCotizacion=$this->db->Execute($sqlCotizacion);
        
        # crear variables de regreso
        $aMensaje=[];
        $aMensaje['exito']=false; //$aMensaje=['exito'=>false];
        $aMensaje['cotizacion']=[];
        # si hay usuarios crear la extraccion del recordset
        $aCotizacion=[];
        if ($rstCotizacion){
            $aMensaje['exito']=true;
            while(!$rstCotizacion->EOF){
                $aCotizacion[]=array(
                    'id_orden'=>$rstCotizacion->fields('id_orden'),
                    'id_servicio'=>$rstCotizacion->fields('id_servicio'),
                    'id_clientes'=>$rstCotizacion->fields('id_clientes'),
                    
                );//fin fel array
                $rstCotizacion->MoveNext();
                
            }//fin del while
            $aMensaje['cotizacion']=$aCotizacion;
            
        }//fin del if
        return $aMensaje;
        
    }// fin del function
    
    
    public function agregarCotizacion($Id_Orden,$Id_Servicio,$Id_Cliente)
    {
      $sqlCotizacion="INSERT INTO cotizacion (Id_Orden,Id_Servicio,Id_ClienteId_articulo,) VALUES ('$Id_Orden','$Id_Servicio','$Id_Cliente')";
        
        #crear varaibles de regreso
        $amensaje=[];
        $amensaje['exito']=false;
        
        $rstCotizacion=$this->db->Execute($sqlCotizacion);
        if($rstCotizacion)
        {
            $amensaje['exito']=true;
        }//fin del if
        return $amensaje;
    }//fin de funcion agregarusuario
    
        public function buscarCotizacion($Id_cotizacion)
    {
      $sqlCotizacion="SELECT Id_Orden,Id_Servicio,Id_Cliente,FROM cotizacion WHERE id_cotizacion='$Id_cotizacion'";
        
        #crear varaibles de regreso
        $amensaje=[];
        $amensaje['exito']=false;
        $amensaje['Id_cotizacion']=$Id_cotizaciocion;
        $rstCotizacion=$this->db->Execute($sqlCotizacion);
        if($rstCotizacion->RecordCount())
        {
            $amensaje['exito']=true;
        }//fin del if
        return $amensaje;
    }//fin de funcion agregarusuario
}

?>