<?php
//paciente

$Nombrepro =$_POST['nomproduc'];
$imagen = $_POST['imagen'];
$descrip = $_POST['descripcion'];
$precio = $_POST['precio'];


$conexion = mysqli_connect('localhost','root','','dientesfelices');

$insertarDatos="insert into producto (nomproduc,imagen,descripcion,precio) values ('$Nombrepro','$imagen','$descrip','$precio')";

$var3=mysqli_query($conexion,$insertarDatos) or die (mysqli_error($conexion));

if (isset($var3)){
    echo"<script language= javascript>
    alert('ingreso exitoso')
    self.location= 'insertar_pro.php'
    </script>";
}

?>