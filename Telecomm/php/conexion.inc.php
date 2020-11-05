<?php
#coneccion a base de datos con ADOBO.php
include '../lib/adodb5/adodb.inc.php';
include 'config.ini.php';

abstract class Conectar{
    private $conn;
    private $tipo=TIPO;
    private $servidor=SERVIDOR;
    private $usuario=USUARIO;
    private $password=PASSWORD;
    private $basedatos=BASEDATOS;
    //crear metodo para conectar 'conexion'
    public function conexion(){
        try{
          //crear capturas
          #negacion ponemos this y luego la variable despues de la flechita
          //!Conexion con el motor de base de datos
          if(!$this->conn=ADONewConnection($this->tipo)){
            throw new Exception('Error al conectarse a motor (driver)');
            }elseif(!$this->conn->Connect($this->servidor,$this->usuario,$this->password,$this->basedatos)){
                throw new Exception('Error al conectarse a base de datos');
            }
            return $this->conn;
        }catch(Exception $e){
          //  mostrar capturas
        ?>
        <!-- seccion html para mensajes -->
        <h3> Han ocurrido Error(es)<?php echo $e->getMessage();?></h3>
          <?php
        
        };
    }//fin del metodo conexion
}
?>