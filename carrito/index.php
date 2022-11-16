
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
 // escribimos la palabra include para incluir nuestro diseño para la pagina principal;
include 'templates/cabecera.php'; 
?>

<br>
<?php if($mensaje!="") {?>

<div class="alert alert-success">
    <?php echo $mensaje; ?>

    <a href="mostrarCarrito.php" class="badge badge-success">Ver carrito</a>

</div>
<?php }?>
 <!--FUNCION DE LA CLASE: ORDENAR LOS PRODUCTOS  -->
<div class="row" >
<?php
//CONECTADA LA BASE DE DATOS LLAMAMOS A LA TABLA PRODUCTOS CON LA VARIABLE SENTENCIA
$sentencia=$pdo -> prepare("SELECT *FROM producto");
$sentencia->execute();
//DEVUELVE UN ARRAY QUE CONTIENE LA FILAS DE LA TALBA PRODUCTO
$listaProductos=$sentencia->fetchAll(PDO :: FETCH_ASSOC);
// print_r($listaProductos);
?>
<!-- RECORREMOS LA TABLA TIPO BUCLE  --> 
<?php foreach($listaProductos as $producto2){ ?> 
    <!--SE ORDENA LOS PRODUCTOS EN 4 FILAS--> 
    <div class="col-3">
        <!--DISEÑO DE UNA CARTA --> 
<div class="card">
     <!--LE PONEMOS NOMBRES A LAS VARIABLES (ESTO NO SIGNIFICA QUE SE IMPRIMIRA EN LA PAGINA , EXCEPTO UNO) --> 
      <!--POPOVER: DISEÑO CUANDO PASAMOS NUESTRO CURSOR APAREZCA LA DESCRIPCION  --> 
    <img 
    title="<?php echo $producto2['nomproduc'];?>" 
    alt="<?php echo $producto2['nomproduc'];?>"
     class="card-img-top" 
     src="productos/<?php echo $producto2['imagen'];?>"
     data-toggle="popover"
     data-trigger="hover"
     data-content="<?php echo $producto2['descripcion'];?>"
     height="317px"   
     >
      <!--IMPRIMIMOS LOS CAMPOS --> 
    <div class="card-body">
    <span><?php echo $producto2['nomproduc'];?></span>
        <h5 class="card-title">$<?php echo $producto2['precio'];?></h5>
        <p class="card-text">Descripcion</p>


<!--ENCRIPTAMOS LOS DATOS (CAMPOS DE NUESTRO BASE DE DATOS),A LADO EL KEY QUE LO TRAEMOS DEL CONF.PHP --> 
        <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto2['CodProducto'],COD,KEY);?>">
        <input type="hidden" name="nombre" id="nombre"value="<?php echo openssl_encrypt($producto2['nomproduc'],COD,KEY);?>">
        <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto2['precio'],COD,KEY);?>">
        <input type="hidden" name="cantidad" id="cantidad"value="<?php echo openssl_encrypt(1,COD,KEY);?>">


        <button class="btn btn-primary"
        name="btnAccion" 
        value="Agregar" 
        type="submit">Agregar al carrito</button>
        
        </form>

    </div>
</div>
</div>
     

<?php } ?>



</div>


<script>

$(function () {
  $('[data-toggle="popover"]').popover()
});


</script>

<?php include 'templates/pie.php'?>
