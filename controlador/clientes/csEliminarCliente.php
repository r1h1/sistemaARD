<?php

//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");

//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_GET['ID'];


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "DELETE FROM clientes_ard WHERE IdCliente='".$id."'";

$resultado = mysqli_query($conexion,$consulta);


//SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Cliente eliminado correctamente");
        window.location.href="../../vista/clientes";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al eliminar, verifique e intente nuevamente.");
        window.location.href="../../vista/clientes";
    </script>';
    mysqli_close($conexion);
}
?>