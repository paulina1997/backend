<?php

mysql_connect("localhost","root"," ");
mysql_select_db("telecomm");

echo '<FORM name="tipo_servicio">';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select tipo_servicio From servicios Order By tipo_servicio";
$result=mysql_query($sSQL);

echo '<select name="tipo_servicio">';

//Mostramos los registros en forma de menú desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["tipo_servicio"];}
mysql_free_result($result)
?>