<?php session_start();
//print_r ($_SESSION);
?>
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
  
      
        

  </div>
  
  
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
      <li class="nav-item ">
        <a class="nav-link" href="Clientes.php">Clientes <span class="sr-only">(actual)</span></a>
      </li>
      
      
    </div>
     </ul>
    
    
    
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="Login.php">Login</a>
       
     
     </ul>
      </div>
     </nav>
      </div> <!-- ./ container menu -->
 <!-- Zona de despliegue -->
 <br>
 <div class="container">
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <div class="card ">
  <div class="card-header">
    Login&nbsp;<i class="fa fa-key fa-2x float-right text-warning"></i>
  </div>
  <div class="card-body">
    <form action="" method="get" id="frmLogin" >
  <div class="form-group">
    <label for="usuario">Usuario</label>
    <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user"></i></div>
        </div>
      <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuario" placeholder="Usuario" >
    </div>
    <small id="usuario" class="form-text text-muted">Nunca comparta sus datos con nadie</small>
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
     <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-lock"></i></div>
        </div>
       <input type="password" class="form-control" id="password" name="password" placeholder="Password">
     </div>
  </div>
  
  <button type="button" id="login" class="btn btn-primary btn-lg btn-block"><i class="fa fa-sign-in"></i>&nbsp;Entrar</button>
</form>
  </div>
  <div class="card-footer text-muted">
   Todos los derechos reservados &copy;
  </div>
</div>
    </div>
  </div>
  
 </div><!-- ./ container despliegue -->
 <!-- ./ Zona de despliegue -->
    <!-- Zona de JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script>
     $(function(){
       $('#login').on('click',function(){
        $.ajax({
         type:'POST',
         url:'met_login.php',
         dataType:'json',
         data:$('#frmLogin').serialize()
         
         })
        .done(function(datos){
         // TODO
         if(datos.exito){
          //console.log(datos);
           location.href="index.php";
         }
         else {
          alert('No autorizado');
          $('#usuario').select();
         }
         
         })
        .fail(function(e){
          console.log(e.responseText);
         });
        
        });
      
      });
     
     
    </script>
</body>

</html>