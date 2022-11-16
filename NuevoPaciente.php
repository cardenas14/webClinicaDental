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
	<title>Nuevo Paciente</title>
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
		<h3>Crear un nuevo historial</h3>
		<hr>
		<div class="alert"></div>



	<form action="RegistrodeHistorialPaciente.php" method="post">

    <label>DNI DEL PACIENTE</label>
    <input type="number" id="DNI" name="DNI"placeholder="DNI">

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


    <label>Codigo del Doctor</label>
    <input type="text" id="Codigo" name="Codigo" placeholder="Codigo docotr" >
    <label>Cuota</label>
    <input type="number" id="Cuota" name="Cuota" placeholder="Cuota">
    <label>Fecha de atenscion</label>
    <input type="date" id="Fecha" name="Fecha" placeholder="Fecha deatencion">
    <label>Receta</label>
    <input type="text" id="Receta" name="Receta" placeholder="Receta">
    <br>
	<input type="submit" value="Enviar Historial">
    </form>
		
	</div>
</section>
</body>
</html>
