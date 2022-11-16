
<?php
$conexion = mysqli_connect('localhost','root','','dientesfelices');
session_start();
$varDniPaciente=$_SESSION["DniPaciente"];
$extencion=".xls";
$sqlHistorial= "Select * from historial_paciente hp 
inner join login_paciente lp on hp.DniPaciente=lp.DniPaciente
inner join login_doctores pd on hp.CodDoctor=pd.CodDoctor
inner join especialidades es on hp.IdEspecialidad=es.IdEspecialidad 
where lp.DniPaciente='$varDniPaciente'";
header('Content-Type: application/xls');
header('Content-Disposition:attachment; filename='."$varDniPaciente.$extencion");
$resultadoHP=mysqli_query($conexion,$sqlHistorial) or die(mysqli_error());
$fila=mysqli_fetch_array($resultadoHP);
           echo "<table border='1'>
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