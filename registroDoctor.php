<?php
//doctor

$Nombre =$_POST['nombre'];
$Apellido=$_POST['Apellido'];
$Dni=$_POST['Dni'];
$Edad=$_POST['Edad'];
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];
$Especialida=$_POST['Especialidad'];
$Sede=$_POST['Sede'];
$Correo=$_POST['Correoelectronico'];
$rol=1;

$conexion = mysqli_connect('localhost','root','','dientesfelices');

$insertarDatos="insert into login_doctores (CodDoctor,DniDoctor,Usuario,Nombre,Apellido,IdEspecialidad,Edad,Contrasena,Sede,correo,rol_id) values ('','$Dni','$Usuario','$Nombre','$Apellido','$Especialida','$Edad','$Contraseña','$Sede','$Correo','$rol')";

$var3=mysqli_query($conexion,$insertarDatos);

if (isset($var3)){
    echo"<script language= javascript>
    alert('Registro exitoso')
    self.location= 'login.php'
    </script>";
}
else{
    echo"<script language= javascript>
    alert('fallo algo')
    self.location= 'login.php'
    </script>";
}
?>

