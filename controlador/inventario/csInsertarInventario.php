<?php


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");


//VARIABLES EN DONDE SE ALMACENAN LOS DATOS
//INGRESADOS
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



//SI TODO OKAY, SE PROCEDE A INSERTAR A LA TABLA INVENTARIO
$consulta = "INSERT INTO `inventario_ard`(`Producto_Nombre`, `Producto_Descripcion`, `Producto_PrecioCompra`,
 `Producto_PrecioVenta`,
 `Producto_Cantidad`, `Producto_Observaciones`, `Producto_FechaIngreso`, `Producto_FechaVencimiento`, 
 `Producto_IdCategoria`, `Producto_IdProveedor`) 
 VALUES ('$sNProducto','$sDescripcion','$sPrecioCompra','$sPrecioVenta','$sCantidad','$sObservaciones',
 '$sFechaIngreso','$sFechaVencimiento','$categoriaId','$provId')";

$resultado = mysqli_query($conexion,$consulta);


//SE BORRA Y SE INSERTA EN LA TABLA AUXILIAR 
$consultaDelete = "DELETE FROM inventario_aux_ard";
$consultaAux = "INSERT INTO `inventario_aux_ard` SELECT * FROM inventario_ard";

$resultado3 = mysqli_query($conexion, $consultaDelete);
$resultado2 = mysqli_query($conexion, $consultaAux);




if ($resultado == 1 && $resultado2 == 1) {
    echo'<script type="text/javascript">
        alert("Producto registrado correctamente");
        window.location.href="../../vista/inventario.php";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/inventario.php";
    </script>';
    mysqli_close($conexion);
}

?>