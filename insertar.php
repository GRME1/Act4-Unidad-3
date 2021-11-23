<?php
include("conexion.php");
$con=conectar();


$id_pedido=$_POST['id_pedido'];
$NombreCom=$_POST['NombreCom'];
$Pedido=$_POST['Pedido'];
$Direccion=$_POST['Direccion'];
$Metodo_Pago=$_POST['Metodo_Pago'];

$sql="INSERT INTO pedidos VALUES('$id_pedido','$NombreCom','$Pedido','$Direccion','$Metodo_Pago')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>