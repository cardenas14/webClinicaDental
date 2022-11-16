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
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_3.css">
	<link rel="stylesheet" type="text/css" href="css/style_2.css">
	<title>Registro de Citas</title>
</head>
<body>
<header>
    
   
	<div class="header">
		
		<h1>Bienvenido</h1>
		<div class="optionsBar">
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
            
		</ul>
	</nav>
	   
		</header>
	<section id="container">
		<h1 >Registro de cita</h1>
	
	
	<div class="Registro_cita">
		<h3>Reserve su cita</h3>
		<hr>
		<div class="alert"></div>
		<form action="registroCitaPaciente.php" method="post">
                <label>Turno</label>
                <input type="text" id="Turno" name="Turno" placeholder="Turno">
                <label>Fecha</label>
                <input type="date" id="Fecha" name="Fecha" placeholder="Fecha">
                <label>Hora</label>
                <input type="time" id="hora" name="hora" placeholder="hora">
                <label>Sedes</label>
                <div>      
                             <select class="inputss" name="sedes">
                                <option> Seleciona Sede</option>
                                 <option value="Lima Norte">Lima Norte</option>
                                <option  value="Lima Centro">Lima Centro</option>
                                <option  value="Lima Sur">Lima Sur</option>
                                </select>
               </div>
                <label>Doctor</label>
                <input type="text" id="Doctor" name="Doctor" placeholder="Doctor">
                <label>Especialidad</label>
                <div>      
                             <select class="inputss" name="Especialidad">
                                <option> Seleciona Especialidad</option>
                                 <option value="1">Odontopediatria</option>
                                <option  value="2">Ortodoncia</option>
                                <option  value="3">Implantes Dentales</option>
                                <option  value="4">Diseño de sonrisa</option>
                                <option  value="5">Ortopedia maxilar</option>
                                <option  value="6">Blanqueamiento</option>
                                <option  value="7">Periodoncia</option>
                                <option  value="8">Endodoncia</option>
                                <option  value="9">Cirugia oral</option>
                              </select>
               </div>
               <label>Consulta</label>

               <textarea name="Consulta"   placeholder="Consulta"></textarea>
                <input type="submit" value="Enviar Cita">
        </form>
	</div>
</section>
</body>
</html>

