<?php

$Usuario=$_POST['usuario'];
$Password=$_POST['password'];
session_start();
$conexion = mysqli_connect('localhost','root','','dientesfelices');
$consulta="SELECT * FROM login_paciente WHERE DniPaciente='".$Usuario."' and Contrasena='".$Password."'" ;   
$var=mysqli_query($conexion,$consulta) or die (mysqli_error());
$filas=mysqli_fetch_array($var);

 if(!$filas[0]){
    echo '<script language= javascript>
    alert("Usuario o Password errados, por favor verifique.")
    self.location= "login.php"
    </script>';
}
else{
    $_SESSION["DniPaciente"]=$filas['DniPaciente'];
        header("Location: PaginaPaciente.php");
    }
