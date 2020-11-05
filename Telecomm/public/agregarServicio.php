<?php
$Id_servicio = filter_input(INPUT_POST, 'Id_servicio');
$tipo_servicio = filter_input(INPUT_POST, 'tipo_servicio');
$costo = filter_input(INPUT_POST, 'costo');
$Id_articulo = filter_input(INPUT_POST, 'Id_articulo');
$Descripcion = filter_input(INPUT_POST, 'Descripcion');
$precio = filter_input(INPUT_POST, 'precio');

 if (!empty($Id_servicio)){
if (!empty($tipo_servicio)){

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
$sql = "INSERT INTO servicios (Id_servicio,tipo_servicio,costo,Id_articulo,Descripcion,precio)
VALUES ('$Id_servicio','$tipo_servicio','$costo','$Id_articulo','$Descripcion','$precio')";
if ($conn->query($sql)){
echo "nuevo registro";
header( "refresh:5;url=Servicios.php" ); 
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "nombre should not be empty";
die();
}

}
else{
echo "correo should not be empty";
die();
}
?>