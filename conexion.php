<?php

$conn = new mysqli("localhost","root","","dientesfelices");

if($conn->connect_errno)
{

echo "No hay conexion : (".$conn->connect_errno.") " .$conn->connect_error;


}



?>