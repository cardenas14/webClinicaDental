<?php
$conexion = mysqli_connect('localhost','root','','dientesfelices');
//variables 
session_start();

if (!isset($_SESSION['Usuario'])){ //si la variable no existe
    header('location:login.php');
}

$varUsuario=$_SESSION["Usuario"];
$sql="Select* from login_doctores where Usuario='$varUsuario'";
$resultado=mysqli_query($conexion,$sql) or die(mysqli_error());
$row=mysqli_fetch_array($resultado);
$sql2="SELECT * FROM login_doctores ld INNER JOIN especialidades es on ld.IdEspecialidad=es.IdEspecialidad WHERE ld.Usuario ='$varUsuario'";
$resultado2=mysqli_query($conexion,$sql2) or die(mysqli_error());
$row2=mysqli_fetch_array($resultado2);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_3.css">
	<link rel="stylesheet" type="text/css" href="css/style_2.css">
	<title>DOCTOR</title>
</head>
<body>
<header>
    
    <div class="header">
			
			<h1>Bienvenido Doctor</h1>
			<div class="optionsBar">
				
				<span>|</span>
				<span class="user"> <?php echo $row['Nombre']," Cod: ".$row['CodDoctor'];?></span>
				<img class="photouser" src="image/images.jpg" alt="Usuario">
				<a href="cerrarD.php"><img class="close" src="image/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
        <nav>
			<ul>
				<li><a href="paginaDoctor.php">Inicio</a></li>
				<li class="principal">
					<a href="#">Pacientes</a>
					<ul>
						<li><a href="NuevoPaciente.php">Nuevo Paciente</a></li>
					</ul>
				</li>
				</li>
				<li class="principal">
					<a href="#">Citas</a>
					<ul>
						<li><a href="Cita_Doctor.php">Nueva Cita</a></li>
					</ul>
				</li>
                <li><a href="horario_doctor.php">Registrar Horarios</a> </li>
				<li><a href="insertar_pro.php">Nuevo producto</a></li>
                <li><a href="index3.php">Listado de ventas</a></li>

			</ul>
		</nav>
        </header>
	<section id="container">
	
	<div class="Registro_cita">
		<h3>Reserve su horario</h3>
		<hr>
		<div class="alert"></div>
	    <form action="RegistroHorario.php" method="post">
    <label>CodDoctor</label>
    <input type="text" id="CodDoctor" name="CodDoctor" value="<?php echo $row2['CodDoctor']?>"placeholder="CodDoctor" disabled>
    <label>Fecha</label>
    <input type="date" id="Fecha" name="Fecha" placeholder="Fecha">
    <label>Horario</label>
    <input type="time" id="Horario" name="Horario" placeholder="Horario">
    <label>Turno</label>
    <input type="text" id="Turno" name="Turno" placeholder="Turno">
    <br>
	<input type="submit" value="Enviar Horario">
    </form>
		
	</div>
</section>
</body>
</html>
