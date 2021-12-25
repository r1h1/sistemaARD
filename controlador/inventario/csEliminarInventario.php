<?php

//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");

//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_GET['ID'];


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "DELETE FROM `inventario_ard` WHERE `IdProducto` = '$id'";

//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta2 = "DELETE FROM `inventario_aux_ard` WHERE `IdProducto` = '$id'";

$resultado = mysqli_query($conexion,$consulta);
$resultado2 = mysqli_query($conexion,$consulta2);


//SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
if ($resultado == 1 && $resultado2 == 1) {
    echo'<script type="text/javascript">
        alert("Producto eliminado correctamente");
        window.location.href="../../vista/inventario.php";
    </script>';
    mysqli_close($conexion);
}

//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al eliminar, verifique e intente nuevamente.");
        window.location.href="../../vista/inventario.php";
    </script>';
    mysqli_close($conexion);
}
?>