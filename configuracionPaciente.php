<?php
$conexion = mysqli_connect('localhost','root','','dientesfelices');
//variables 
session_start();

if (!isset($_SESSION['DniPaciente'])){ //si la variable no existe
    header('location:login.php');
}
$varDniPaciente=$_SESSION["DniPaciente"];
$sql="Select* from login_paciente where DniPaciente='$varDniPaciente'";
$resultado=mysqli_query($conexion,$sql) or die(mysqli_error());
$row=mysqli_fetch_array($resultado);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paciente</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_2.css">
    <link rel="stylesheet" href="css/stylebot.css">
    
</head>
<body>
    <header>
        <div class="header">
			
		<h1>Bienvenido</h1>
			<div class="optionsBar">
				<p id="mes" class="mes"></p>
				<span>|</span>
				<span class="user"> <?php echo $row['nombre'];?> </span>
				<img class="photouser" src="image/images.jpg" alt="Usuario">
				<a href="cerrar.php"><img class="close" src="image/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
        </div>
        <nav>
			<ul>
				<li><a href="PaginaPaciente.php">Inicio</a></li>
                <li><a href="cita_paciente.php">Nueva Cita</a></li>
                <li><a href="carrito/index.php">CARRITO</a> </li>
                <li><a href="configuracionPaciente.php">Configurar</a></li>
                
			</ul>
		</nav>
           
   </header>