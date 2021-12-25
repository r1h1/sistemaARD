<?php

//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");


//VARIABLES EN DONDE SE ALMACENAN LOS DATOS
//INGRESADOS
$id = $_POST["txtid"];
$sNProducto = $_POST["nproducto"];
$sDescripcion = $_POST["descripcion"];
$sPrecioCompra = $_POST["preciocompra"];
$sPrecioVenta = $_POST["precioventa"];
$sCantidad = $_POST["cantidad"];
$sObservaciones = $_POST["observaciones"];
$sFechaIngreso = $_POST["fechaingreso"];
$sFechaVencimiento = $_POST["fechavencimiento"];
$sCategoria = $_POST["ncategoria"];
$sProveedor = $_POST["nproveedor"];


//SE OBTIENE EL ID SEGÚN LA CATEGORIA Y EL PROVEEDOR
$sqlcategoria = "SELECT * FROM categoria_productos_ard WHERE CategoriaP_Nombre = '$sCategoria'";
$sqlproveedor = "SELECT * FROM proveedores_ard WHERE Prov_Nombre = '$sProveedor'";

$idCategoria = mysqli_query($conexion, $sqlcategoria);
$idProveedor = mysqli_query($conexion, $sqlproveedor);

//RECORRER
while ($mostrar = mysqli_fetch_array($idCategoria)) {
    $categoriaId = $mostrar['IdCategoriaProducto'];
}

while ($mostrar = mysqli_fetch_array($idProveedor)) {
    $provId = $mostrar['IdProveedor'];
}




if ($sNProducto !=null && $sDescripcion !=null) {

    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `inventario_ard` SET `Producto_Nombre`='$sNProducto',
    `Producto_Descripcion`='$sDescripcion',`Producto_PrecioCompra`='$sPrecioCompra',
    `Producto_PrecioVenta`='$sPrecioVenta',
    `Producto_Cantidad`='$sCantidad',`Producto_Observaciones`='$sObservaciones',
    `Producto_FechaIngreso`='$sFechaIngreso',`Producto_FechaVencimiento`='$sFechaVencimiento',
    `Producto_IdCategoria`='$categoriaId',
    `Producto_IdProveedor`='$provId' WHERE IdProducto = '$id'";


    $consulta2 = "UPDATE `inventario_aux_ard` SET `Producto_Nombre`='$sNProducto',
    `Producto_Descripcion`='$sDescripcion',`Producto_PrecioCompra`='$sPrecioCompra',
    `Producto_PrecioVenta`='$sPrecioVenta',
    `Producto_Cantidad`='$sCantidad',`Producto_Observaciones`='$sObservaciones',
    `Producto_FechaIngreso`='$sFechaIngreso',`Producto_FechaVencimiento`='$sFechaVencimiento',
    `Producto_IdCategoria`='$categoriaId',
    `Producto_IdProveedor`='$provId' WHERE IdProducto = '$id'";

    $resultado = mysqli_query($conexion, $consulta);
    $resultado2 = mysqli_query($conexion, $consulta2);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1 && $resultado2 == 1) {
        echo '<script type="text/javascript">
            alert("Producto Editado correctamente");
            window.location.href="../../vista/inventario.php";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/inventario.php";
        </script>';
        mysqli_close($conexion);
    }
}

?>