<?php
# aqio se den todas las acciones CRUD
include 'conexion.inc.php';
//ini_set('display_errors',0);
class Articulo extends Conectar {
    //todo
    private $db;
    
    public function __construct(){
        $this->db=parent::conexion();
    }
    #metodo para consultar(R)
    public function listarArticulos(){
        
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
        $sqlArticulos='SELECT Id_articulo,Nombre,Existencia,Caracteristicas,Precio,Costo,Reorden,Unidad FROM articulos';
        $rstArticulos=$this->db->Execute($sqlArticulos);
        
        # crear variables de regreso
        $aMensaje=[];
        $aMensaje['exito']=false; //$aMensaje=['exito'=>false];
        $aMensaje['articulo']=[];
        # si hay usuarios crear la extraccion del recordset
        $aArticulo=[];
        if ($rstArticulos){
            $aMensaje['exito']=true;
            while(!$rstArticulos->EOF){
                $aArticulo[]=array(
                    'Id_articulo'=>$rstArticulos->fields('Id_articulo'),
                    'Nombre'=>$rstArticulos->fields('Nombre'),
                    'Existencia'=>$rstArticulos->fields('Existencia'),
                    'Caracteristicas'=>$rstArticulos->fields('Caracteristicas'),
                    'Precio'=>$rstArticulos->fields('Precio'),
                    'Costo'=>$rstArticulos->fields('Costo'),
                    'Reorden'=>$rstArticulos->fields('Reorden'),
                    'Unidad'=>$rstArticulos->fields('Unidad'),
                );//fin fel array
                $rstArticulos->MoveNext();
                
            }//fin del while
            $aMensaje['articulo']=$aArticulo;
            
        }//fin del if
        return $aMensaje;
        
    }// fin del function
    
    
    public function agregarArticulos($Id_articulo,$Nombre,$Existencia,$Caracteristicas,$Precio,$Costo,$Reorden,$Unidad)
    {
      $sqlArticulos="INSERT INTO articulos (Id_articulo,Nombre,Existencia,Caracteristicas,Precio,Costo,Reorden,Unidad) VALUES ('$Id_articulo','$Nombre','$Existencia','$Caracteristicas','$Precio','$Costo','$Reorden','$Unidad')";
        
        #crear varaibles de regreso
        $amensaje=[];
        $amensaje['exito']=false;
        
        $rstArticulos=$this->db->Execute($sqlArticulos);
        if($rstArticulos)
        {
            $amensaje['exito']=true;
        }//fin del if
        return $amensaje;
    }//fin de funcion agregarusuario
    
        public function buscarArticulos($Id_articulo)
    {
      $sqlArticulos="SELECT Id_articulo,Nombre,Existencia,Caracteristicas,Precio,Costo,Reorden,Unidad FROM articulos WHERE id_articulo='$Id_articulo'";
        
        #crear varaibles de regreso
        $amensaje=[];
        $amensaje['exito']=false;
        $amensaje['Id_articulo']=$Id_articulo;
        $rstArticulos=$this->db->Execute($sqlArticulos);
        if($rstArticulos->RecordCount())
        {
            $amensaje['exito']=true;
        }//fin del if
        return $amensaje;
    }//fin de funcion agregarusuario
    
    
    
    
    
    
    
    
    
    
}
?>