<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet"href="styleee.css">

</head>
<body>
    <!--INLCUIMOS NUEVAMENTE LA CONEXION DE BASE DE DATOS-->
<?php include('conexion.php');?>
<!--AÑADIMOS AL IGUAL QUE EN INDEX UN BOTON DE REGRESO PARA REGRESAS A LA PANTALLA PRINCIPAL DE DOCTOR-->
<a href="paginaDoctor.php"><img src="../proyecto_viernes16Actualizado/carrito/productos/volver.png" height="80"></a>

<table>
<!--CREAMOS CAMPOS DE LA TABLA-->
<tr><th colspan="6"><h1>Listado de productos</h1></th></tr>
<tr>
<th>IDVENTA</th>
<th>PRODUCTO</th>
<th>PRECIOUNITARIO</th>
<th>CANTIDAD</th>

</tr>
<!--EN ESTE CASO LLAMAMOS A LA TABLA TBDETALLEVENTA PARA VER QUE HA COMPRADO CADA CLIENTE CON RESPECTO A SU ID , OBVIAMENTE-->
<?php
$sql="SELECT * FROM tbtdetalleventa tb inner join producto pr on tb.IDPRODUCTO=pr.CodProducto";
$resultado=mysqli_query($conn,$sql);


while($mostrar=mysqli_fetch_array($resultado))
{

?>
<!--AÑADIREMOS CADA CAMPO DE LA TABLA TBDETALLEVENTA A LOS CAMPOS CREADOS DE LA TABLA-->
<tr>
    <td><?php echo $mostrar['IDVENTA'] ?></td>
    <td><?php echo $mostrar['nomproduc'] ?></td>
    <td><?php echo $mostrar['PRECIOUNITARIO'] ?></td>
    <td><?php echo $mostrar['CANTIDAD'] ?></td>

</tr>

<?php
}
?>


    


</table>
</body>


    
</html>