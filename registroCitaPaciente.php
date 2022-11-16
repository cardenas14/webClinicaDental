<?php
//REGISTRO CITA
session_start();
$varDniPaciente=$_SESSION["DniPaciente"];
$Turno=$_POST['Turno'];
$Fecha=$_POST['Fecha'];
$Hora=$_POST['hora'];
$Sede=$_POST['sedes'];
$Doctor=$_POST['Doctor'];
$Especialida=$_POST['Especialidad'];
$consulta=$_POST['Consulta'];
$conexion = mysqli_connect('localhost','root','','dientesfelices');
$insertarDatos="INSERT INTO reservas_cita(DniPaciente, Truno, Fecha, Horario, Sede, IdEspecialidad, CodDoctor, Consulta) VALUES ('$varDniPaciente', '$Turno','$Fecha','$Hora','$Sede','$Especialida','$Doctor','$consulta')";
$var3=mysqli_query($conexion,$insertarDatos);

if (isset($var3)){
    echo"<script language= javascript>
    alert('ingreso')
    self.location= 'PaginaPaciente.php'
    </script>";
}
else{
    echo"<script language= javascript>
    alert('fallo algo')
    self.location= 'login.php'
    </script>";

}
?>