<?php
$Id_servicio = filter_input(INPUT_POST, 'Id_servicio2');
$tipo_servicio = filter_input(INPUT_POST, 'tipo_servicio2');
$Descripcion = filter_input(INPUT_POST, 'Descripcion2');
$precio = filter_input(INPUT_POST, 'Precio2');
$costo = filter_input(INPUT_POST, 'costo2');
$Id_articulo = filter_input(INPUT_POST, 'Id_articulo2');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "telecomm";


// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
    $sql="UPDATE servicios SET Id_servicio='$Id_servicio', tipo_servicio='$tipo_servicio', descripcion='$Descripcion', precio='$precio', costo='$costo', id_articulo='$Id_articulo' WHERE Id_servicio='$Id_servicio'";

if ($conn->query($sql)){
echo "Se actualizo correctamente";
header( "" );
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>


