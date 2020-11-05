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
      <li class="nav-item active">
        <a class="nav-link" href="articulos.php">Articulos <span class="sr-only">(actual)</span></a>
      </li>
  
      </div>
      
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
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
      <form action="articulos.html">
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
        <a href="#addarticulo" data-toggle= "modal" class="btn btn-light">
          <i class="fa fa-plus fa -x2 text-danger float-rigth"></i>
        </a>
      </div>
    </div>
  </div>
  
     <!--./Zona de ventanas de modales-->
<div class="modal" tabindex="-1" role="dialog" id=addarticulo>
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Articulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
   <!-----CAMPOS DE DEL REGISTRO DEL CLIENTE----->
   <form id="frmEditar" action="agregarArticulos.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" >
     <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="Id_articulo">id articulos</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Id_articulo" aria-describedby="userHelp" placeholder="Id_articulo" name="Id_articulo">
                </div>
                <small id="idHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Nombre">Nombre</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Nombre" aria-describedby="userHelp" placeholder="Nombre" name="Nombre">
                </div>
                <small id="nomHelp" class="form-text text-muted"></small>
              </div>
            
            <label for="Existencia">Existencia</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Existencia" aria-describedby="userHelp" placeholder="Existencia" name="Existencia">
                </div>
                <small id="nomHelp" class="form-text text-muted"></small>
            
              <div class="form-group">
                <label for="Caracteristicas">Caracteristicas</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Caracteristicas" aria-describedby="exisHelp" placeholder="Caracteristicas" name="Caracteristicas">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="Precio">Precio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Precio" aria-describedby="precioHelp" placeholder="Precio" name="Precio">
                </div>
                <small id="precioHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Costo">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Costo" aria-describedby="costoHelp" placeholder="Costo" name="Costo">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Reorden">Reorden</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Reorden" aria-describedby="reordenHelp" placeholder="Reorden" name="Reorden">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="Unidad">Unidad</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="Unidad" aria-describedby="unidadHelp" placeholder="Unidad" name="Unidad">
                </div>
                <small id="unidadHelp" class="form-text text-muted"></small>
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
   <div class="modal" tabindex="-1" role="dialog" id="verarticulo" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Datos de articulos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
          <!-----CAMPOS DEL REGISTRO DEL CLIENTE----->
    <div class="modal-body">
          <div class="card-body">
              <div class="form-group">
               <label for="nombre">Nombre</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="nombreVER" aria-describedby="userHelp" placeholder="Nombre">
                </div>
                <small id="nHelp" class="form-text text-muted"></small>
              </div>
            
              <div class="form-group">
                <label for="caracter">Caracteristicas</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="caracteristicaVER" aria-describedby="exisHelp" placeholder="Caracteristicas">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="precio">Precio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="precioVER" aria-describedby="precioHelp" placeholder="Precio">
                </div>
                <small id="precioHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="costo">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="costoVER" aria-describedby="costoHelp" placeholder="Costo">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="reorden">Reorden</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="reordenVER" aria-describedby="reordenHelp" placeholder="Reorden">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="unidad">Unidad</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" id="unidadVER" aria-describedby="unidadHelp" placeholder="Unidad">
                </div>
                <small id="unidadHelp" class="form-text text-muted"></small>
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
               <label for="nombre">Nombre</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="nombre" id="nombre2" aria-describedby="userHelp" placeholder="Nombre">
                </div>
                <small id="nHelp" class="form-text text-muted"></small>
              </div>
            
              <div class="form-group">
                <label for="caracter">Caracteristicas</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user-o text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="carcateristica" id="caracteristica2" aria-describedby="exisHelp" placeholder="Caracteristicas">
                </div>
                <small id="caracterHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                 <label for="precio">Precio</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="precio" id="precio2" aria-describedby="precioHelp" placeholder="Precio">
                </div>
                <small id="precioHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="costo">Costo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="costo" id="costo2" aria-describedby="costoHelp" placeholder="Costo">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="reorden">Reorden</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="reorden" id="reorden2" aria-describedby="reordenHelp" placeholder="Reorden">
                </div>
                <small id="costoHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
               <label for="unidad">Unidad</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-at text-black-50"></i></div>
                  </div>
                  <input type="text" class="form-control" name="unidad" id="unidad2" aria-describedby="unidadHelp" placeholder="Unidad">
                </div>
                <small id="unidadHelp" class="form-text text-muted"></small>
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
                <th>id_Articulo</th>
                <th>Nombre</th>
                <th>Existencia</th>
                <th>Caracteristica</th>
                <th>Precio</th>
                <th>Costo</th>
                <th>Unidad</th>
                <th>Reorden</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody id="articulo"></tbody>
        </table>
    </div>
  
    
    <!--Zona de Js-->
    <script src="assest/js/jquery-3.3.1.js"></script>
    <script src="assest/js/bootstrap.min.js"></script>
    <!--validar-->
  <!-- /* <script src="assest/js/jquery.validate.min.js"></script>
    <script src="assest/js/additional-methods.min.js"></script>
    <script src="assest/js/localization/messages_es.js"></script>*/
    validar personalizada
    <script src="assest/js/validar.articulo.js"></script>
       -->
       <script>

     $(function(){
     $('#id_articulo').on ('blur',function(){
     var Id_articulo=$(this).val();
     $.ajax({
     type:'POST',
     url:'buscar.php',
     dataType:'json',
     data:'Id_articulo='+Id_articulo })
     .done(function(respuesta){
      //console.log(respuesta);
     if (respuesta.exito){
      alert('Ya existe');
      $('#Id_articulo').select();
      
     }
     else{
      $('#Nombre').focus();
      
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
      $.getJSON('listarArticulos.php',function(datos){
       //console.log(datos); 
			$.each(datos.articulo, function(indice, articulo){
      //Console.log
     //armar la tabla
      $('#articulo').append('<tr><td>'+(indice+1)+
                       '</td><td>'+articulo.Id_articulo+
																					 '</td><td>'+articulo.Nombre+
                       '</td><td>'+articulo.Existencia+
                       '</td><td>'+articulo.Caracteristicas+
                       '</td><td>'+articulo.Precio+
                       '</td><td>'+articulo.Costo+
                        '</td><td>'+articulo.Reorden+
                         '</td><td>'+articulo.Unidad+
                       '</td><td><a href="#deletearticulo" data-toggle="modal"><a href="#editarticulo" data-toggle="modal" data id_Articulo="'+articulo.Id_articulo+'"data nombre="'+articulo.Nombre+'"data existencia="'+articulo.Existencia+'" data caractereisticas="'+articulo.Caracteristicas+'" data precio="'+articulo.Precio+'" data costo="'+articulo.Costo+'"data reorden="'+articulo.Reorden+'"data unidad="'+articulo.Unidad+'" > <i class= "btn btn-warning btn-sm fa fa-edit" id="btn_editar"></i></a>&nbsp;&nbsp;<a href="#deletearticulo" class= "btn btn-danger btn-sm" id="btn_borrar"><i class="fa fa-trash"></i></a></td></tr>');                                   });//<a href="#verarticulo" data-toggle="modal" ><i class= "btn btn-info btn-sm fa fa-eye" id="btn_ver" ></i></a>
                }).fail(function(e){
            console.log(e.responseText);
            
            });//fin de fail
              //esto es llamar ventana modal y mostar datos
             //usar directamente la ventana modal, quitar el id btn_editar
             $('#editarticulo').on('shown.bs.modal', function(evt){
             evt.preventDefault();
             var aarticulos=$(evt.relatedTarget);//aqui solo obtenemos los elementos data
             console.log(aarticulos);
                                                        
             $('#nombre2').val(aarticulos.data('nombre'));
             $('#existencia2').val(aarticulos.data('existencia'));
             $('#caracteristicas2').val(aarticulos.data('caracteristicas'));
             $('#precio2').val(aarticulos.data('precio'));
             $('#costo2').val(aarticulos.data('costo'));
             $('#reorden2').val(aarticulos.data('reorden'));
             $('#unidad2').val(aarticulos.data('unidad'));
             
             
                    //  $('#rfc2').val(aClientes.data('rfc'));
                    });
         
          });
      </script>
</body>

</html>