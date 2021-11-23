<?php

include("conexion.php");
$con=conectar();


$id_pedido=$_POST['id_pedido'];
$NombreCom=$_POST['NombreCom'];
$Pedido=$_POST['Pedido'];
$Direccion=$_POST['Direccion'];
$Metodo_Pago=$_POST['Metodo_Pago'];

$sql = "UPDATE pedidos SET NombreCom='$NombreCom', Pedido='$Pedido', Direccion='$Direccion', Metodo_Pago='$Metodo_Pago' WHERE id_pedido = '$id_pedido'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>