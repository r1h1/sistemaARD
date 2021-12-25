<?php

//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");

//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_GET['ID'];


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "DELETE FROM categoria_productos_ard WHERE IdCategoriaProducto ='".$id."'";

$resultado = mysqli_query($conexion,$consulta);


//SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Categoría eliminada correctamente");
        window.location.href="../../vista/categoriaProductos.php";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al eliminar, verifique e intente nuevamente.");
        window.location.href="../../vista/categoriaProductos.php";
    </script>';
    mysqli_close($conexion);
}
?>