<?php
$conexion = mysqli_connect('localhost','root','','dientesfelices');
session_start();
$varUsuario=$_SESSION["Usuario"];
$salida="";
$query = "SELECT * FROM historial_paciente hp
inner join login_paciente lp on hp.DniPaciente=lp.DniPaciente
inner join login_doctores ld on hp.CodDoctor=ld.CodDoctor
where Usuario='$varUsuario'";

if(isset($_POST['consulta'])){
    $q=mysqli_real_escape_string($conexion,$_POST['consulta']);
    $query = "SELECT * FROM historial_paciente hp
     inner join login_paciente lp on hp.DniPaciente=lp.DniPaciente
     inner join login_doctores ld on hp.CodDoctor=ld.CodDoctor
     where Usuario='$varUsuario' and (lp.DniPaciente like '%".$q."%' or ID_historial like '%".$q."%' or lp.nombre like '%".$q."%')";
}
$resultado=mysqli_query($conexion ,$query) or die (mysqli_error($conexion));

if(mysqli_num_rows($resultado)!=0){
    
    $salida.="
    <table border='1' class='tabla_datos '>
        <thead>
        <tr>
            <td>Id Historial</td>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Consulta</td>
            <td>Fecha Atendida</td>
         </tr>
         </thead>
         <br>
    <tbody>";
    while($fila=mysqli_fetch_array($resultado)){
        $salida.= "<tr>
        <td>".$fila['ID_historial']."</td>
        <td>".$fila['DniPaciente']."</td>
        <td>".$fila['nombre']."</td>
        <td>".$fila['apellido']."</td>
        <td>".$fila['Edad']."</td>
        <td>".$fila['Receta']."</td>
        <td>".$fila['Fecha_Atencio']."</td>

        </tr>";
    }
    $salida.="</tbody></table>";
} else {
    $salida.="<br>No hay datos :(<br>";
}
echo $salida;
mysqli_close($conexion);
?>
