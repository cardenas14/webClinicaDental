<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarritoDientesFelices</title>
    <!--IMPLEMENTACION DE BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body> 
     <!--DISEÑO DE LA BARRA --> 
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-top">
     <!--IMPLEMENTACION DE NUESTRO LOGO -->
    <a class="navbar-brand" href="index.php"><img src="productos/Logo2.png" width="200"></a>
      <!--ESTE DISEÑO ES CUANDO QUERRAMOS REDUCIR EL TAMAÑO DE LA VENTANA , TODO LOS ITEMS DENTRO DE LA BARRA SE AÑADIRA A UNA IMAGEN DE UN CUADRO -->
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
     <!--ITEMS DE LA BARRA -->
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                 <!--CREACION DE LA PALABRA INICIO , Y OBVIAMENTE CUANDO LE DEMOS CLICK VUELVA A LA PAGINA PRINCIPAL -->
                <a class="nav-link" href="index.php"><FONT SIZE=8 FACE="Fantasy" color="skyblue">Inicio</FONT></a>
            </li>
            <li class="nav-item active" style="margin-left: 90px;">
             <!-- IMPORTAMOS LA IMAGEN DEL CARRITO Y A SU LADO LA CANTIDAD QUE QUIERA DE PRODUCTOS DEL CLIENTE , ADEMAS CUANDO HAGAMOS CLICK AL CARRITO SE IRA A UNA TABLA-->
                <a class="nav-link" href="mostrarCarrito.php"><FONT SIZE=8 FACE="Fantasy" color="skyblue"><img src="productos/carrito.png" width="50"><?php 
                echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);   
                ?></FONT></a>
            </li> 
             <!-- IMPORTAMOS LA IMAGEN "VOLVER" PARA QUE REGRESE A LOS DATOS DEL CLIENTE -->
            <li class="nav-item active" style="margin-left: 1250px;">
                <a class="nav-link" href="../PaginaPaciente.php"><img src="productos/volver.png" height="80"></a>
            </li>
                     
        </ul>
    </div>
</nav>
</div>
</br>
</br>
<div class="container"> 