<?php
//REGISTRO CITA
session_start();
$dni=$_POST['DNI'];
$Especialida=$_POST['Especialidad'];
$varDoctor=$_POST['Codigo'];
$cuota=$_POST['Cuota'];
$Fecha=$_POST['Fecha'];
$Receta=$_POST['Receta'];

$conexion = mysqli_connect('localhost','root','','dientesfelices');

$insertarDatos="INSERT INTO historial_paciente (ID_historial, DniPaciente, IdEspecialidad, CodDoctor, Cuota, Fecha_Atencio, Receta) VALUES (null, '$dni','$Especialida','$varDoctor','$cuota','$Fecha','$Receta')";
$var3=mysqli_query($conexion,$insertarDatos) or die (mysqli_error($conexion));  

if (isset($var3)){
    echo"<script language= javascript>
    alert('Registro exitoso')   
    self.location= 'NuevoPaciente.php'
    </script>";
}
else{
    echo"<script language= javascript>
    alert('Registro Fallido')
    self.location= 'NuevoPaciente.php'
    </script>";

}
?>