<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
   <link rel="stylesheet" href="assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/css/font-awesome.min.css">
    <style>
      .rojo{color: #3A4FC9;}
  </style>
</head>

<body> 
    <!--Encabezado-->
    <div class="container"></div>
    <div class="container-fluid">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <img src="assest/img/Tele.png" width="60px" alt="Logo" >
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Servicios.php">Servicios <span class="sr-only">(actual)</span></a>
      </li>
   
 
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="articulos.php">Articulos <span class="sr-only">(actual)</span></a>
      </li>
  
      </div>
      
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="Clientes.php">Clientes <span class="sr-only">(actual)</span></a>
      </li>
           </ul>
    
     </div>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="cotizacion.php">Cotizacion <span class="sr-only">(actual)</span></a>
      </li>
           </ul>
    
    </div>
     </ul>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item ">
        <a class="nav-link" href="Login.php">Login</a>
     </ul>
      </div>
    
    </nav>
     <!--Zona de despliegue-->
     
     
     
     
      <!--Zona de despliegue-->


     <!--./Zona de ventanas de modales-->
     <!--INICIO DEL MODAL AGREGAR-->
 <form id="frmEditar" action="./agregarServicio.php">
 <div class="modal" tabindex="-1" role="dialog" id=addservicio>
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Servicio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
   <!-----CAMPOS DE DEL REGISTRO DEL CLIENTE----->
   
     <div class="modal-body">
              <div class="form-group">
               <label for="Id_servicio">Id Servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_servicio2" placeholder="Id Servicio" name="Id_servicio2">
                </div>
              </div>
              
              
              <div class="form-group">
               <label for="tipo_servicio">Tipo servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="tipo_servicio" placeholder="Tipo servicio" name="tipo_servicio">
                </div>
              </div>


              <div class="form-group">
                 <label for="costo">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="costo" placeholder="costo" name="costo">
                </div>
              </div>
              
              <div class="form-group">
               <label for="Id_articulo">Id Articulos</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-barcode text-black-50"></i></div>
                  </div>
                   <input type="text" class="form-control" id="Id_articulo" placeholder="Id Articulos" name="Id_articulo">
                </div>
              </div>
              
              
             <div class="form-group">
               <label for="Descripcion">Descripción servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Descripcion" placeholder="Descripcion servicio" name="Descripcion">
                </div>
              </div>
              
            <div class="form-group">
                <label for="precio">Precio de venta</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="precio"placeholder="Precio" name="precio">
                </div>
              </div>
       
    <!-----FIN DE LOS CAMPOS DE DEL REGISTRO DEL CLIENTE----->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="btnActualizar">Guardar cambios</button>
        </div>
      </div>
      </div>
     </div>
  </div>
</form>
     
     
     
   <!--INICIO DEL MODAL EDITAR-->
   <form method="post" action="editarServicio.php">
     <div class="modal" tabindex="-1" role="dialog" id="editservicio">
       <div class="modal-dialog" role="document">
       <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       
        <!-----CAMPOS DE DEL EDITAR DEL CLIENTE----->
     <div class="modal-body">
              <div class="form-group">
               <label for="Id_servicio">Id Servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_servicio" placeholder="Id Servicio" name="Id_servicio">
                </div>
              </div>
              
              
              <div class="form-group">
               <label for="tipo_servicio2">Tipo servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="tipo_servicio2" placeholder="Tipo servicio" name="tipo_servicio2">
                </div>
              </div>


              <div class="form-group">
                 <label for="costo2">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="costo2" placeholder="costo" name="costo2">
                </div>
              </div>
              
              <div class="form-group">
               <label for="Id_articulo2">Id Articulos</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-barcode text-black-50"></i></div>
                  </div>
                   <input type="text" class="form-control" id="Id_articulo2" placeholder="Id Articulos" name="Id_articulo2">
                </div>
              </div>
              
              
             <div class="form-group">
               <label for="Descripcion2">Descripción servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Descripcion2" placeholder="Descripcion servicio" name="Descripcion2">
                </div>
              </div>
              
            <div class="form-group">
                <label for="Precio2">Precio de venta</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Precio2" placeholder="Precio" name="Precio2">
                </div>
              </div>
           <!-----FIN DE LOS CAMPOS DE DEL EDITAR DEL CLIENTE----->
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar usuario</button>
      </div>   
     </div>
    </div>
   </div>
  </div>
  </div>
 </form>
      <!--FIN DEL MODAL EDITAR-->
      
      
      
      
      
      <!--INICIO DEL MODAL ELIMINAR-->
  <form method="post" action="borrarServicio.php">
  <div class="modal" tabindex="-1" role="dialog" id="borrarServicio">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¿Desea eliminar registro?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        


<!-- Borrar -->
     <div class="modal-body">
              <div class="form-group">
               <label for="Id_servicio3">Id Servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" required="required" disabled id="Id_servicio3" name="Id_servicio3" placeholder="Id Servicio">
                </div>
              </div>
              
              
              <div class="form-group">
               <label for="tipo_servicio3">Tipo servicio</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" required="required" disabled id="tipo_servicio3" placeholder="Tipo servicio" name="tipo_servicio3">
                </div>
              </div>


              <div class="form-group">
                 <label for="costo3">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" required="required" disabled id="costo3" name="costo3" placeholder="costo">
                </div>
              </div>
<!-- FIN de Datos-->
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  </form>
  <!--FIN DEL MODAL ELIMINAR-->
      &nbsp;
         <div class="container mt-2">
        <div class="row">
         <div class= "col"><a href="#addservicio" data-toggle= "modal" class="btn btn-light">
         <i class="fa fa-plus fa-x2 text-danger float-rigth"></i></a></div>
        </div>
    <table class="table table-sm table-striped table-hover table-bordered" id="tabla">
  <thead>
    <tr>
                <th scope="col">ID Servicio</th>
                <th scope="col">Tipo Servicio</th>
                <th scope="col">Costo</th>
                <th scope="col">ID Articulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th>Opciones</th>
              </tr>
            </thead>
  
  <?php
  $link_address = '#Servicios.php';
  $conn = mysqli_connect("localhost", "root", "", "telecomm");
  if ($conn-> connect_error){
    die("Conexion fallo:" . $conn-> connect_error);
  }
  $sql =  "SELECT Id_servicio, tipo_servicio, costo, Id_articulo, Descripcion, precio FROM servicios";
  $result = $conn-> query($sql);
  
  if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()){
     echo "<tr><td>" . $row["Id_servicio"] . "</td><td>" . $row["tipo_servicio"] . "</td><td>" . $row["costo"] . "</td><td>" . $row["Id_articulo"] . "</td><td>" . $row["Descripcion"] . "</td><td>" . $row["precio"] . "</td><td>" .  "<a href=\"#editservicio\" data-target=\"#editservicio\" onclick=\"return mostrarDatos();\" data-toggle=\"modal\" class=\"btn btn-warning btn-sm\" id=\"btnEditar\"><i class=\"fa fa-edit\"></i></a>" . "    " . "<a href=\"#borrarServicio\" data-target=\"#borrarServicio\" onclick=\"return DatosBorrar();\" data-toggle=\"modal\" class=\"btn btn-danger btn-sm\" id=\"btnBorrar\"><i class=\"fa fa-trash\"></i></a>" .  "</td></tr>";
      
    }
    echo "</table>";
  }
  else {
    echo "0 result";
  }
  $conn-> close();
  ?>
  
  <tbody id="servicio">
   </div>
  </tbody>
   
        </table>
  </div>

  <!--FIN DEL MODAL ELIMINAR-->
    <!--./Zona de despliegue-->
       <!--Zona de Js-->
    <script src="assest/js/jquery-3.3.1.js"></script>
    <script src="assest/js/bootstrap.min.js"></script>
    <!--validar
    <script src="assest/js/jquery.validate.min.js"></script>
    <script src="assest/js/additional-methods.min.js"></script>
    <script src="assest/js/localization/messages_es.js"></script>-->
    <!--validar personalizada-
    <script src="assest/js/Validar.Clientes.js"></script>
       -->
           <script>
            
        function mostrarDatos () {
          var tabla = document.getElementById('tabla'),rIndex;
        
        for(var i =0;i< tabla.rows.length; i++){
          tabla.rows[i].onclick = function(){
            rIndex=this.rowIndex;
            console.log(rIndex);
            document.getElementById("Id_servicio2").value=this.cells[0].innerHTML;
            document.getElementById("tipo_servicio2").value=this.cells[1].innerHTML;
            document.getElementById("Descripcion2").value=this.cells[2].innerHTML;
            document.getElementById("Precio2").value=this.cells[3].innerHTML;
            document.getElementById("costo2").value=this.cells[4].innerHTML;
            document.getElementById("Id_articulo2").value=this.cells[5].innerHTML;
          };
        }
    }
        function DatosBorrar () {
          var tabla = document.getElementById('tabla'),rIndex;
        
        for(var i =0;i< tabla.rows.length; i++){
          tabla.rows[i].onclick = function(){
            rIndex=this.rowIndex;
            console.log(rIndex);
            document.getElementById("Id_servicio3").value=this.cells[0].innerHTML;
            document.getElementById("tipo_servicio3").value=this.cells[1].innerHTML;
            document.getElementById("costo3").value=this.cells[2].innerHTML;
          };
        }
    }
    </script>
</body>

</html>