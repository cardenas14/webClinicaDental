<?php

session_start();

$mensaje="";    
//EN RESUMEN ESTA DICIENDO CUANDO HAGAMOS CLICK EN AGREGA BOTON ,ADEMAS TENEMOS EL NOMBRE DE LA VARIABLE
if(isset($_POST['btnAccion'])){
// PARA CREAR LOS PROCESOS ELIMINAR, AGREGAR Y ELIMINAR LOS PRODUCTOS
switch($_POST['btnAccion']){


//EN CASO DE AGREGAR
    case 'Agregar':
//AQUI DESCENCRIPTAMOS LOS DATOS , A LADO EL KEY QUE LO TRAEMOS DEL CONF.PHP
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $ID=openssl_decrypt($_POST['id'],COD,KEY);
            $mensaje="Ok ID correcto".$ID."<br/>";

        }else{

            $mensaje="Ups...ID incorrecto".$ID."<br/>";
        }
        if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
            $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje.="Ok NOMBRE".$NOMBRE."<br/>";
        }else{ $mensaje="Upss.. algo pasa con el nombre"."<br/>"; break; }

        if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
            $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
            $mensaje.="Ok CANTIDAD".$CANTIDAD."<br/>";
        }else{ $mensaje="Upss.. algo pasa con la cantidad"."<br/>"; break; }

        if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
            $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
            $mensaje.="Ok precio".$PRECIO."<br/>";
        }else{ $mensaje="Upss.. algo pasa con el precio"."<br/>"; break; }


        if(!isset($_SESSION['CARRITO'])){
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO,
                
            );
            $_SESSION['CARRITO'][0]=$producto;
            $mensaje="Producto agregado al carrito";



        }else{

            $NumeroProductos=count($_SESSION['CARRITO']);
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO,
                
            );
            $_SESSION['CARRITO'][$NumeroProductos]=$producto;
            $mensaje="";

            
        }
        //$mensaje= print_r($_SESSION,true);
          
        break;
        case "Eliminar":
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);


                foreach ($_SESSION['CARRITO'] as $indice=> $producto){
                    if($producto['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);
                        break;

                    }


                }        
    
            }else{
    
                $mensaje="Ups...ID incorrecto".$ID."<br/>";
            }

            
}





}


?>