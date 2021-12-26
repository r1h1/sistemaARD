<?php

include("../../controlador/csBDDCon.php");


//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_POST["txtid"];
$sNCategoria = $_POST["nCategoria"];
$sDescripcion = $_POST["descripcion"];

if ($sNCategoria !="" && $sDescripcion !="") {

    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `categoria_productos_ard` SET `CategoriaP_Nombre`='$sNCategoria',
    `CategoriaP_Descripcion`='$sDescripcion' WHERE IdCategoriaProducto='$id'";

    $resultado = mysqli_query($conexion, $consulta);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1) {
        echo '<script type="text/javascript">
            alert("Editado correctamente");
            window.location.href="../../vista/categoriaProductos.php";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/categoriaProductos.php";
        </script>';
        mysqli_close($conexion);
    }
}

?>