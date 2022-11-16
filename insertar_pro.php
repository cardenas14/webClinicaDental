<?php
$conexion = mysqli_connect('localhost','root','','dientesfelices');
//variables 
session_start();

if (!isset($_SESSION['Usuario'])){ //si la variable no existe
    header('location:login.php');
}
//CONEXION DE LA BASE DE DATOS: COMO PRINCIPAL PROTAGONISTA EL CAMPO USUARIO
$varUsuario=$_SESSION["Usuario"];
//ORACION SQL
$sql="Select* from login_doctores where Usuario='$varUsuario'";
$resultado=mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
$row=mysqli_fetch_array($resultado);
//ORACION SQL
$sql2="SELECT * FROM login_doctores ld INNER JOIN especialidades es on ld.IdEspecialidad=es.IdEspecialidad WHERE ld.Usuario ='$varUsuario'";
$resultado2=mysqli_query($conexion,$sql2) or die(mysqli_error($conexion));
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
<header><!--CREACION DEL CUERPO DE LA PAGINA DOCTOR EN FORMA DE BARRA-->
    <div class="header">
			
			<h1>Bienvenido Doctor</h1>
			<div class="optionsBar">
				<p>Perú, Junio 2021</p>
				<span>|</span>
				<span class="user"> <?php echo $row['Nombre']," Cod: ".$row['CodDoctor'];?></span>
				<img class="photouser" src="image/images.jpg" alt="Usuario">
				<a href="cerrar.php"><img class="close" src="image/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
        <nav>
			<ul>
				<!--LE DAMOS ALGUNOS TITULO COMO LOS SIGUIENTES , ESTOS VAN A DIRIGIRSE A CADA PROCESOS QUE HAGAMOS EN ESTA PAGINA-->
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
				<!--NOS ENFOCAREMOS EN ESTE CAMPO PORQUE VAMOS A VER SOBRE INSERTAR PRODUCTO-->
				<li><a href="insertar_pro.php">Nuevo producto</a></li>
                <li><a href="index3.php">Listado de ventas</a></li>

			</ul>
		</nav>
        </header>
	<section id="container">
		<!--TITULO-->
		<h1 >Registro de productos</h1>
	
        <div class="Registro_cita">
		<h3>Inserte producto</h3>
		<hr>
		<div class="alert"></div>
		<!--CAMPOS QUE LA PAGINA REQUIERA PARA INGRESAR UN PRODUCTO , ESTO TAMBIEN SE GUARDARA EN LA BASE DE DATOS-->
		<form action="registrar_producto.php" method="post">
                <label>Nombre de producto</label>
                <input type="text" id="nomproduc" name="nomproduc" >
                <form action='' method='POST' enctype='multipart/form-data'>
                <label>Imagen</label>
                <input type='file' id="imagen" name='imagen'>
                <label>Descripcion del producto</label>
                <textarea id="descripcion" name="descripcion"></textarea>
                <label>Precio</label>
                <input type="text" id="precio" name="precio" placeholder="">
</br>
</br>

<!--BOTON DE AGREGAR-->
                <input type="submit" value="Agregar">
                </form>
				</div>
</section>         
</body>
</html>