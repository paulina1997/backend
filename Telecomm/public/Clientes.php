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
    <div class="container-fluid"></div>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <img src="assest/img/Tele.png" width="60px" alt="Logo" >
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="Servicios.php">Servicios <span class="sr-only">(actual)</span></a>
      </li>
   
 </div>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="articulos.php">Articulos <span class="sr-only">(actual)</span></a>
      </li>
  
      </div>
      
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Clientes.php">Clientes <span class="sr-only">(actual)</span></a>
      </li>
           </ul>
    
    
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
    </div>
     </nav>
     <!--./ Container menu -->
     <!--Search -->
     
         <div class="topnav">
     <div class="container-fluid">
     <div class="md-form active-cyan active-cyan-2 mb-3">
      <form action="Clientes.html">
       <input type="text" placeholder="Search.." name="search">
       <button type="submit"><i class="fa fa-search"></i></button>
      </form>
     </div>
    </div>
    </div>
     <!--Zona de despliegue-->
  <div class="container" mt-2>
    <div class="row">
      <div class="col float-right">
        <a href="#addcliente" data-toggle= "modal" class="btn btn-light">
          <i class="fa fa-plus fa -x2 text-danger float-rigth"></i>
        </a>
      </div>
    </div>
  </div>
    
     <!--./Zona de ventanas de modales-->
<div class="modal" tabindex="-1" role="dialog" id=addcliente>
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
   <!-----CAMPOS DE DEL REGISTRO DEL CLIENTE----->
   <form id="frmEditar" action="agregarClientes.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" >
     <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_cliente">id cliente</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_clientes" aria-describedby="userHelp" placeholder="Id_cliente" name="Id_clientes">
                </div>
                <small id="idHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="nombre_empresa">Nombre empresa</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="nombre_empresa" aria-describedby="userHelp" placeholder="nombre empresa" name="nombre_empresa">
                </div>
                <small id="nomHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="telefono">Telefono</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="telefono" aria-describedby="clientRFCHelp" placeholder="Telefono" name="telefono">
                </div>
                <small id="exiHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="direccion" aria-describedby="exisHelp" placeholder="Direccion" name="direccion">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="nombre_contacto">Nombre contacto</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="nombre_contacto" aria-describedby="precioHelp" placeholder="Nombre_contacto" name="nombre_contacto">
                </div>
                <small id="precioHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Correo_Electronico">Correo electrónico</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Correo_Electronico" aria-describedby="costoHelp" placeholder="Correo_Electronico" name="Correo_Electronico">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
          </div>
       
    </div>
    <!-----FIN DE LOS CAMPOS DE DEL REGISTRO DEL CLIENTE----->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="btnActualizar">Guardar cambios</button>
        </div>
   </form>
    </div>
    </div>
</div>
  
    
        
  <!--INICIO DEL MODAL VER-->
   <div class="modal" tabindex="-1" role="dialog" id="vercliente" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Datos de clientes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
          <!-----CAMPOS DEL REGISTRO DEL CLIENTE----->
         
    <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_cliente">Id clientes</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_cliente" aria-describedby="userHelp" placeholder="Id_clientes" name="Id_cliente">
                </div>
                <small id="nHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="nombre_empresa">Nombre empresa</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="nombre_empresa" aria-describedby="clientRFCHelp" placeholder="Nombre empresa" name="nombre_empresa">
                </div>
                <small id="exiHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="telefono" aria-describedby="exisHelp" placeholder="Telefono" name="telefono">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="direccion">Dirección</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="direccion-describedby="precioHelp" placeholder="Direccion" name="direccion">
                </div>
                <small id="precioHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="nombre_contacto">Nombre contacto</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="nombre_contacto" aria-describedby="costoHelp" placeholder="Nombre contacto" name="nombre_contacto">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Correo_Electronico">Correo electrónico</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Correo_Electronico" aria-describedby="reordenHelp" placeholder="Correo electronico" name="Correo_Electronico">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
          </div>
          <!-----FIN DE LOS CAMPOS DEL REGISTRO DEL CLIENTE----->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="btnActualizar">Guardar cambios</button>
        </div>
        
        
      </div>
    </div>
  </div>
      </div>
  </div>

    
    
    
    <!--INICIO DEL MODAL EDITAR-->
  <div class="modal" tabindex="-1" role="dialog" id="editarticulo">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Datos de articulos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <!-----CAMPOS DE DEL REGISTRO ARTICULOS----->
        <form id="formEditar">
         <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_clientes">Id clientes</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="Id_clientes" id="Id_clientes" aria-describedby="userHelp" placeholder="id clientes">
                </div>
                <small id="nHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="nombre_empresa">Nombre empresa</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="nombre_empresa" id="existencia2" aria-describedby="clientRFCHelp" placeholder="nombre_empresa">
                </div>
                <small id="exiHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="telefono">Telefóno</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="exisHelp" placeholder="Telefono">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="direccion">Dirección</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="precioHelp" placeholder="direccion">
                </div>
                <small id="precioHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="nombre_empresa">Nombre empresa</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" aria-describedby="costoHelp" placeholder="Nobre empresa">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Correo_Electronico">Correo electrónico</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="Correo_Electronico" id="Correo_Electronico" aria-describedby="reordenHelp" placeholder="Correo">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
             
            </form>
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
  
      <!--FIN DEL MODAL EDITAR-->
  
  <!--INICIO DEL MODAL ELIMINAR-->
  <div class="modal" tabindex="-1" role="dialog" id="deletearticulo">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">¿Desea eliminar registro?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  <!--FIN DEL MODAL ELIMINAR-->
    <div class="container">
    <table class="table table-light table-striped">
  <thead>
    <tr>
      <th>Sec.</th>
      <th>id Clientes</th>
      <th>Nombre Empresa</th>
      <th>Telefono</th>
      <th>Direccion</th>
      <th>Nombre Contacto</th>
      <th>Correo Electronico</th>
      <th>Opciones</th>
    </tr>
  </thead>
            <tbody id="clientes"></tbody>
        </table>
    </div>
    
    
    
    
     <!--Zona de Js-->
    <script src="assest/js/jquery-3.3.1.js"></script>
    <script src="assest/js/bootstrap.min.js"></script>
    <!--validar-->
    <script src="assest/js/jquery.validate.min.js"></script>
    <script src="assest/js/additional-methods.min.js"></script>
    <script src="assest/js/localization/messages_es.js"></script>
    <!--validar personalizada
    <script src="assest/js/validar.articulo.js"></script>-->
      
       <script>

     $(function(){
     $('#id_cliente').on ('blur',function(){
     var Id_clientes=$(this).val();
     $.ajax({
     type:'POST',
     url:'buscarcliente.php',
     dataType:'json',
     data:'Id_clientes='+Id_clientes })
     .done(function(respuesta){
      //console.log(respuesta);
     if (respuesta.exito){
      alert('Ya existe');
      $('#Id_clientes').select();
      
     }
     else{
      $('#nombre_empresa').focus();
      
     }
     
     
      })
     .fail(function(e){
     console.log(e.responseText);
     });
     });
     });
     </script>   
       
    <script>
        
       
      $(function()
		  {
      $.ajaxSetup({cache:false});
      $.getJSON('listarClientes.php',function(datos){
       //console.log(datos); 
			$.each(datos.clientes, function(indice, clientes){
      //Console.log
     //armar la tabla
      $('#clientes').append('<tr><td>'+(indice+1)+
                       '</td><td>'+clientes.Id_clientes+
																					 '</td><td>'+clientes.nombre_empresa+
                       '</td><td>'+clientes.telefono+
                       '</td><td>'+clientes.direccion+
                       '</td><td>'+clientes.nombre_contacto+
                       '</td><td>'+clientes.Correo_Electronico+
                       '</td><td><a href="#deletecliente" data-toggle="modal"><a href="#editcliente" data-toggle="modal" data id_Clientes="'+clientes.Id_clientes+'"data Nombre_Empresa="'+clientes.nombre_empresa+'"data Telefono="'+clientes.telefono+'" data Direccion="'+clientes.direccion+'" data Nombre_Contacto="'+clientes.nombre_contacto+'" data Correo electrónico="'+clientes.Correo_Electronico+'" > <i class= "btn btn-warning btn-sm fa fa-edit" id="btn_editar"></i></a>&nbsp;&nbsp;<a href="#deletecliente" class= "btn btn-danger btn-sm" id="btn_borrar"><i class="fa fa-trash"></i></a></td></tr>');                                   });
                }).fail(function(e){
            console.log(e.responseText);
             
             
             //<a href="#vercliente" data-toggle="modal" ><i class= "btn btn-info btn-sm fa fa-eye" id="btn_ver" ></i></a>
            });//fin de fail
              //esto es llamar ventana modal y mostar datos
             //usar directamente la ventana modal, quitar el id btn_editar
             $('#editcliente').on('shown.bs.modal', function(evt){
             evt.preventDefault();
             var clientess=$(evt.relatedTarget);//aqui solo obtenemos los elementos data
             console.log(clientess);
                                                        
             $('#nombre2').val(clientess.data('nombre'));
             $('#existencia2').val(clientess.data('existencia'));
             $('#caracteristicas2').val(clientess.data('caracteristicas'));
             $('#precio2').val(clientess.data('precio'));
             $('#costo2').val(clientess.data('costo'));
             $('#reorden2').val(clientess.data('reorden'));
             $('#unidad2').val(clientess.data('unidad'));
             
             
                    //  $('#rfc2').val(aClientes.data('rfc'));
                    });
         
          });
      </script>
</body>

</html>