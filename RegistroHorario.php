<?php
$conexion = mysqli_connect('localhost','root','','dientesfelices');
//variables 
session_start();

if (!isset($_SESSION['Usuario'])){ //si la variable no existe
    header('location:login.php');
}
$varCodDoctor=$_POST["CodDoctor"];
$varFecha=$_POST["Fecha"];
$varHora=$_POST["Horario"];
$varTurno=$_POST["Turno"];

 $insertarDatosFechas="INSERT INTO horarios (CodDoctor,Fecha,Horario,Turno) VALUES ('$varCodDoctor','$varFecha','$varHora','$varTurno')";
$QueryH=mysqli_query($conexion,$insertarDatosFechas);


if (isset($QueryH)){
     echo"<script language= javascript>
    alert('EXITO')
    self.location= 'paginaDoctor.php'
    </script>";
}
else{
    echo"<script language= javascript>
    alert('Vuelva a ingresar')
    self.location= 'paginaDoctor.php'
    </script>";

}

?>