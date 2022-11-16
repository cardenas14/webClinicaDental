<?php
//paciente

$Nombre =$_POST['nombre'];
$Apellido=$_POST['Apellido'];
$Dni=$_POST['Dni'];
$Edad=$_POST['Edad'];
$Sexo=$_POST['Sexo'];
$Contraseña=$_POST['Contraseña'];
$Correo=$_POST['Correoelectronico'];
$rol=2;

$conexion = mysqli_connect('localhost','root','','dientesfelices');

$insertarDatos="insert into login_paciente (DniPaciente,nombre,apellido,edad,sexo,Contrasena,correo,rol_id) values ('$Dni','$Nombre','$Apellido','$Edad','$Sexo','$Contraseña','$Correo','$rol')";

$var3=mysqli_query($conexion,$insertarDatos) or die (mysqli_error());

if (isset($var3)){
    echo"ingreso exitoso";
}
else{
    echo"<script language= javascript>
    alert('fallo algo')
    self.location= 'login.php'
    </script>";

}

?>

