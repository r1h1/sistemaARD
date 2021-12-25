<?php

//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../../csBDDCon.php");


$idproducto = $_REQUEST['idp'];


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = ("DELETE FROM `ventas_auxiliar_ard` WHERE `VentaDetalle_IdProducto` = $idproducto");
mysqli_query($conexion,$consulta);


?>