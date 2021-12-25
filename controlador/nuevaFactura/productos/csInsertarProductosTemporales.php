<?php

include("../../csBDDCon.php");;

//VARIABLES EN DONDE SE ALMACENAN LOS DATOS
//INGRESADOS
$sCantidad = $_POST["cantidadAVender"];
$sCantidadExistencia = $_POST["cantidad"];
$sPrecioVenta = $_POST["precioventa"];
$sTotalVenta = $sCantidad * $sPrecioVenta;
$sNombreProducto = $_POST["producto"];


if($sNombreProducto == "" || $sNombreProducto == null || $sCantidad > $sCantidadExistencia || $sCantidad == 0 || $sCantidad == ""){

}

if($sCantidad == "" || $sCantidad == null || $sCantidad > $sCantidadExistencia || $sCantidad == 0 || $sCantidad == ""){

}

if($sNombreProducto != "" && $sNombreProducto != null && $sCantidad <= $sCantidadExistencia && $sCantidad != 0 && $sCantidad != ""){

   

    //SE OBTIENE ID DEL PRODUCTO POR SU NOMBRE
    $sqlidproducto = "SELECT IdProducto, Producto_Nombre FROM `inventario_ard` WHERE Producto_Nombre = '$sNombreProducto'";
    $idProducto = mysqli_query($conexion, $sqlidproducto);

    //SE INICIALIZA EN 0
    $sIdProducto = 0;
    while ($mostrar = mysqli_fetch_array($idProducto)) {
        $sIdProducto = $mostrar["IdProducto"];
    }



    //SE OBTIENE EL ID DE LA VENTA PARA SABER QUE PRODUCTOS PERTENECEN POR VENTA Y SI NO, SE GENERA
    //IGUAL A 1
    $sqlidventa = "SELECT IdCorrelativoVenta FROM ventas_detalle_ard ORDER BY IdCorrelativoVenta DESC LIMIT 1";
    $idVenta = mysqli_query($conexion, $sqlidventa);

    //SE INICIALIZA EN 0
    $ventaId = 0;
    while ($mostrar2 = mysqli_fetch_array($idVenta)) {
        $ventaId = $mostrar2[0];
    }


    if($ventaId == 0 || $ventaId == null || $ventaId == "" || $ventaId == ''){
        $ventaId = 1;
    }


    if($ventaId != 0 || $ventaId != null || $ventaId != "" || $ventaId != ''){

        $ventaId = $ventaId + 1;

        //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
        $consulta = "INSERT INTO `ventas_auxiliar_ard`(`IdCorrelativoVenta`, `VentaDetalle_Cantidad`, `VentaDetalle_PrecioVenta`,`VentaDetalle_TotalProducto`, `VentaDetalle_IdProducto`) VALUES ($ventaId, $sCantidad, $sPrecioVenta, $sTotalVenta, $sIdProducto)";
        $resultado = mysqli_query($conexion,$consulta);


        //SE ACTUALIZA EL STOCK EN LA TABLA INVENTARIO AUXILIAR ANTES DE PASAR A LA TABLA INVENTARIO PRINCIPAL, PARA EVITAR
        //QUE EL STOCK NO SE TERMINE

        $nuevoStock = abs($sCantidad - $sCantidadExistencia);

        $consultaActualizarStock = "UPDATE `inventario_aux_ard` SET `Producto_Cantidad`= $nuevoStock WHERE `IdProducto` = $sIdProducto";
        $resultadoActualizarStock = mysqli_query($conexion, $consultaActualizarStock);


    }


    
}


?>