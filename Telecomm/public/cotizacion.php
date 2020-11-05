<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion</title>
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
      <li class="nav-item">
        <a class="nav-link" href="articulos.php">Articulos <span class="sr-only">(actual)</span></a>
      </li>
  
      </div>
      
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Clientes.php">Clientes <span class="sr-only">(actual)</span></a>
      </li>
     
    </ul>
     </div>
    </ul>
    
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="cotizacion.php">Cotizacion <span class="sr-only">(actual)</span></a>
      </li>
     
    </ul>
     </div>
     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
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
     
   
			
         
     <!--Zona de despliegue-->
  <div class="container" mt-2>
    <div class="row">
      <div class="col float-right">
        <a href="#addcotizacion" data-toggle= "modal" class="btn btn-light">
          <i class="fa fa-plus fa -x2 text-danger float-rigth"></i>
        </a>
      </div>
    </div>
  </div>
  
     <!--./Zona de ventanas de modales-->
<div class="modal" tabindex="-1" role="dialog" id=addcotizacion>
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Cotizacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
   <!-----CAMPOS DE DEL REGISTRO DEL CLIENTE----->
   <form id="frmEditar" action="agregarCotizacion.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" >
     <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_orden">Id_orden</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_orden" aria-describedby="userHelp" placeholder="Id_orden" name="Id_orden">
                </div>
                <small id="idHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="id servicio">Id_servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Nombre" aria-describedby="userHelp" placeholder="Nombre" name="Id_servicio">
                </div>
                <small id="nomHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="id cliente">Id_cliente</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Existencia" aria-describedby="clientRFCHelp" placeholder="Existencia" name="Id_cliente">
                </div>
                <small id="exiHelp" class="form-text text-muted"></small>
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
  
     <!--FIN DEL MODAL AGREGAR-->
     
     
     
  <!--INICIO DEL MODAL VER-->
   <div class="modal" tabindex="-1" role="dialog" id="vercotizacion" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Datos de cotizacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
          <!-----CAMPOS DEL REGISTRO DEL CLIENTE----->
          <div class="form-group">
               <label for="id orden">Id_orden</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="existenciaVER" aria-describedby="clientRFCHelp" placeholder="Id_orden">
                </div>
                <small id="exiHelp" class="form-text text-muted"></small>
              </div>
            
            <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="id servicio"> Id_servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="nombreVER" aria-describedby="userHelp" placeholder="Id_servicio">
                </div>
                <small id="nHelp" class="form-text text-muted"></small>
              </div>
              
              <div class="form-group">
                <label for="id cliente">Id_cliente</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="caracteristicaVER" aria-describedby="exisHelp" placeholder="Id_cliente">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
              </div> 
          <!-----FIN DE LOS CAMPOS DEL REGISTRO DEL CLIENTE----->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
      </div>
  </div>

  <!--FIN DEL MODAL VER-->
  
   <!--INICIO DEL MODAL EDITAR-->
  <div class="modal" tabindex="-1" role="dialog" id="editcotizacion">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Datos de cotizacion</h5>
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
               <label for="Id_orden">Id_orden</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="nombre" id="nombre2" aria-describedby="userHelp"placeholder="Id_orden">
                </div>
                <small id="nHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="id_servicio">Id_servicio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-address-book text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="existencia" id="existencia2" aria-describedby="clientRFCHelp" placeholder="Id_servicio">
                </div>
                <small id="exiHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="id_cliente">Id_cliente</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="carcateristica" id="caracteristica2" aria-describedby="exisHelp" placeholder="Id_cliente">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
             
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
  <div class="modal" tabindex="-1" role="dialog" id="deletecotizacion">
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
                <th>ID Orden</th>
               <th>ID Servicio</th>
               <th>ID Cliente</th>
               <th> Opciones</th>
              </tr>
            </thead>
            <tbody id="cotizacion"></tbody>
         <tfoot>
          <td>Exportar:</td>
          <!--<td><button type="button" class="btn btn-info" title="Exportar a CSV" id="csv"><i class="fa fa-file-excel-o"></i></button></td>
          <td><button type="button" class="btn btn-info" title="Exportar a XML" id="xml"><i class="fa fa-file-code-o"></i></button></td>
          --><td><a href="to_pdf.php" target="_blank" class="btn btn-info" title="Exportar a PDF" id="pdf"><i class="fa fa-file-pdf-o"></i></a></td>
         </tfoot>
       
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
    <script src="assest/js/validar.articulo.js"></script>
       -->
       <script>

     $(function(){
     $('#id_orden').on ('blur',function(){
     var Id_orden=$(this).val();
     $.ajax({
     type:'POST',
     url:'buscar.php',
     dataType:'json',
     data:'Id_orden='+Id_orden })
     .done(function(respuesta){
      //console.log(respuesta);
     if (respuesta.exito){
      alert('Ya existe');
      $('#Id_orden').select();
      
     }
     else{
      $('#id_servicio').focus();
      
     }
     
     
      })
     .fail(function(e){
     console.log(e.responseText);
     });
     });
     });
        
       
      $(function()
		  {
      $.ajaxSetup({cache:false});
      $.getJSON('./listarCotizacion.php',function(datos){
       //console.log(datos); 
			$.each(datos.cotizacion, function(indice, cotizacion){
      //Console.log
     //armar la tabla
      $('#cotizacion').append('<tr><td>'+(indice+1)+
                       '</td><td>'+cotizacion.id_orden+
					                  '</td><td>'+cotizacion.id_servicio+
                       '</td><td>'+cotizacion.id_clientes+
'</td><td><a href="#deleteCotizacion" data-toggle="modal"><a href="#editcotizacion" data-toggle="modal" data id_orden="'+cotizacion.id_orden+'"data id_servicio="'+cotizacion.id_servicio+'"data id_cliente="'+cotizacion.id_clientes+'" > <i class= "btn btn-warning btn-sm fa fa-edit" id="btn_editar"></i></a>&nbsp;</i></a>&nbsp;<a href="#deletecotizacion" class= "btn btn-danger btn-sm" id="btn_borrar"><i class="fa fa-trash"></i></a></td></tr>');
      //boton ver <a href="#vercotizacion" data-toggle="modal" ><i class= "btn btn-info btn-sm fa fa-eye" id="btn_ver" > va antes a href de delete
      
      });
                }).fail(function(e){
            console.log(e.responseText);
            
            });//fin de fail
              //esto es llamar ventana modal y mostar datos
             //usar directamente la ventana modal, quitar el id btn_editar
             $('#editcotizar').on('shown.bs.modal', function(evt){
             evt.preventDefault();
             var acotizacion=$(evt.relatedTarget);//aqui solo obtenemos los elementos data
             console.log(acotizacion);
                                                        
             $('#id_orden2').val(acotizacion.data('id_orden'));
             $('#id_servicios2').val(acotizacion.data('id_servicios'));
             $('#id_clinte2').val(acotizacion.data('id_cliente'));
          
             
             
                    //  $('#rfc2').val(aClientes.data('rfc'));
                    });
         
          });
      
      
      </script>
</body>

</html>