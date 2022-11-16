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

$sql3="SELECT * FROM login_doctores id INNER JOIN reservas_cita rc on id.CodDoctor=rc.CodDoctor WHERE id.Usuario='$varUsuario'";
$resultado3=mysqli_query($conexion,$sql3) or die(mysqli_error());
$row3=mysqli_fetch_array($resultado3);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina Doctor</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_2.css">
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
		<h1>Bienvenido al sistema</h1>
        </section>

        <h1>Busqueda de Historial de los pacientes</h1>
    <div class="form-1-2">
           <label for="caja_busqueda">Buscar: </label>
           <input  type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Ingresar DNI paciente, ID paciente o Nombre del paciente"></input>
    </div>
    <div id="datos">
           
    </div>
    


    <h2>Horarios reservados</h2>

    <?php
           echo "<table border='1'>
           <tr >
            <th >Dni Paciente</th>
            <th >Consulta</th>
            <th >Fecha</th>
            <th >Hora</th>
            <th >Sede</th>
            </tr>
           ";
           do{
               echo"<tr> 
                    <td >".$row3['DniPaciente']."</td>
                    <td >".$row3['Consulta']. "</td>
                    <td >".$row3['Fecha']."</td>
                    <td >".$row3['Horario']."</td>
                    <td >".$row3['Sede']."</td>
                    </tr>\n";
           }while($row3=mysqli_fetch_array($resultado3));
           echo"</table> \n";
           ?>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="main.js"></script>









</body>
</html>