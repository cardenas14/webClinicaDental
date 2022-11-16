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
$sqlHistorial= "Select * from historial_paciente hp 
                    inner join login_paciente lp on hp.DniPaciente=lp.DniPaciente
                    inner join login_doctores pd on hp.CodDoctor=pd.CodDoctor
                    inner join especialidades es on hp.IdEspecialidad=es.IdEspecialidad 
                    where lp.DniPaciente='$varDniPaciente'";
$resultadoHP=mysqli_query($conexion,$sqlHistorial) or die(mysqli_error());
$fila=mysqli_fetch_array($resultadoHP);

$sqlCitas="SELECT * FROM reservas_cita rc inner join login_doctores ld on rc.CodDoctor=ld.CodDoctor 
inner join especialidades es on ld.IdEspecialidad=es.IdEspecialidad  where rc.DniPaciente='$varDniPaciente' ";
$resultadoCR=mysqli_query($conexion,$sqlCitas) or die(mysqli_error());
$filaCitas=mysqli_fetch_array($resultadoCR);
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
                
                
			</ul>
		</nav>
           
   </header>
   
<div class="iconochat" >
<div class="iconochat-1">
    <a href="javascript:abrirchat()"> <img class="iconochat-2" src="img/chat-regular-24.png"> </a>
</div>
   
</div>

<div class="container" id="chatbot">
    <div class="chatbox">
            <div class="headerbot">
                <h4 class="textobot" > <img src='img/perfil.jpg' class='imgRedonda'/> DientesBot </h4>
                <a class="x-chatbot" href="javascript:cerrarchat()"> <img  class="x-chatbot" src="img/x-regular-24.png" ></a>
                       
            </div>
            
                <div class="body" id="chatbody">
                <p class="alicia">Hola! soy DientesBot, Estoy para responder preguntas relacionadas con los dientes</p>
                    <div class="scroller"></div>
                </div>

            <form class="chat" method="post" autocomplete="off">
            
                        <div>
                            <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style=" font-family: cursive; font-size: 20px;">
                        </div>
                        <div>
                            <input type="submit" value="Enviar" id="btn">
                        </div>
            </form>

    
    </div>
</div>
         
    <section id="container">
		<h1>Bienvenido al sistema</h1>
	</section>
    <div  class="tamaño">
        <h2>Historial</h2>
           <?php
           echo "<table width='800' border='0'>
           <tr >
            <th >ID Historial</th>
            <th >Especialidad</th>
            <th >DNI</th>
            <th >Doctor</th>
            <th >Fecha</th>
            <th >Observacion</th>
            </tr>
           ";
           do{
               echo"<tr> 
                    <td >".$fila['ID_historial']."</td>
                    <td >".$fila['Descripcion']. "</td>
                    <td >".$fila['DniPaciente']."</td>
                    <td >".$fila['Nombre']."</td>
                    <td >".$fila['Fecha_Atencio']."</td>
                    <td >".$fila['Receta']."</td> 
                </tr>\n";
           }while($fila=mysqli_fetch_array($resultadoHP));
           echo"</table> \n";
           ?>

    </div>
        

           <H2>Exportacion del historial</H2>
           <a href="excel.php"><img    width="100px" src="image/iconoExcel.png" alt="Exportar excel" title="Exportar excel" ></a>
           <a target="_blank" href="pdf.php"><img  width="60px" src="image/iconopdf.png" alt="excel" title="Exportar PDF" ></a> 

    <section id="container">
		<h1>Pendiente</h1>
    </section>

        <div class="tamaño">
        <h2>Citas</h2>

        <?php
           echo "<table width='800' border='0'>
           <tr >
            <th >Turno</th>
            <th >Fecha</th>
            <th >Hora</th>
            <th >Sede</th>
            <th >Especialidad</th>
            <th >CodDoctor</th>
            <th >Nombre del Doctor</th>
            <th >Consulta</th>
            </tr>
           ";
           do{
               echo"<tr> 
                    <td >".$filaCitas['Truno']."</td>
                    <td >".$filaCitas['Fecha']. "</td>
                    <td >".$filaCitas['Horario']."</td>
                    <td >".$filaCitas['Sede']."</td>
                    <td >".$filaCitas['Descripcion']."</td>
                    <td >".$filaCitas['CodDoctor']."</td> 
                    <td >".$filaCitas['Nombre']."</td> 
                    <td >".$filaCitas['Consulta']."</td>
                </tr>\n";
           }while($filaCitas=mysqli_fetch_array($resultadoCR));
           echo"</table> \n";
           ?>
        </div>
           <footer>
               <h4>Reservado 2021</h4>
           </footer>

           
        
    <script src="app.js"></script>

    <script>
        function abrirchat(){
            document.getElementById("chatbot").style.display = "block"
        }
        function cerrarchat(){
            document.getElementById("chatbot").style.display = "none"
        }

    </script>

</body>
</html>