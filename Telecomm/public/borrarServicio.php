<?php
$correo = filter_input(INPUT_POST, 'correoBorrar');



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
$sql = "DELETE FROM servicios WHERE Id_servicio='$Id_servicio'";

if ($conn->query($sql)){
echo "Se ha borrado correctame";
header( "refresh:3;url=Servicios.php" );
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>
