<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styleee.css">
</head>

<body>
<!--SE INCLUYE LA CONEXION A LA BASE DE DATOS -->
<?php include('conexion.php');?>
<!--AÑADIMOS UNA IMAGEN PARA VOLVER A LA PAG PRINCIPAL DE LOS DOCTORES-->
<a href="paginaDoctor.php"><img src="../proyecto_viernes16Actualizado/carrito/productos/volver.png" height="80"></a>
<!--SE CREA UN TABLA -->
<table>

<tr><th colspan="6"><h1>Listado de pacientes</h1></th></tr>
<tr>
<!--CAMPOS-->
<th>ID</th>
<th>ClaveTransaccion</th>   
<th>Fecha</th>
<th>Correo</th>
<th>Total de Compras</th>


</tr>
<!--LLAMAMOS A LA TABLA VENTAS PARA QUE EN ELLA SE AÑADA TODO LOS PACIENTES REPRESETANDOLO PRINCIPALMENTE CON UN ID-->
<?php
$sql="select * from tblventas";
$resultado=mysqli_query($conn,$sql);


while($mostrar=mysqli_fetch_array($resultado))
{

?>
<!--IMPRIMOS LO QUE ESTA DE LA BASE DE DATOS A LA CAMPOS CREADOS EN LA TABLA-->
<tr>
    <td><?php echo $mostrar['ID'] ?></td>
    <td><?php echo $mostrar['ClaveTransaccion'] ?></td>
    <td><?php echo $mostrar['Fecha'] ?></td>
    <td><?php echo $mostrar['Correo'] ?></td>
    <td><?php echo $mostrar['Total'] ?></td>    

</tr>

<?php
}
?>
</table>
</body>
<!--SE CREA UN BOTON VER PRODUCTO PARA VER DETALLADAMENTE LAS VENTAS DE CADA PACIENTE -->
<ul class="vr">
            <li><a href="productos.php">Ver Productos</a></li>      
        </ul>   

    
</html>