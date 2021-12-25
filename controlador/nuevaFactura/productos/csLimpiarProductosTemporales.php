<?php

//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../../csBDDCon.php");



//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "DELETE FROM `ventas_auxiliar_ard`";

$resultado = mysqli_query($conexion,$consulta);


?>