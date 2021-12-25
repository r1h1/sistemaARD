<?php

include("../../csBDDCon.php");

session_start();


//VARIABLES QUE TRAE EN JAVASCRIPT
$sNit = $_POST['ingresoNIT'];
$sMetodoPago = $_POST['mpagar'];
$usuarioVenta = $_SESSION['usuario'];

date_default_timezone_set('America/Guatemala');
$sFechaVenta = date("d") . "/" . date("m") . "/" . date("Y");


if($sNit == "" || $sNit == null && $sMetodoPago == "" || $sMetodoPago == null){
     //SI SON VACIOS NO HACE NADA
}


//SI SON DIFERENTE A VACIO HACE ESTO
if($sNit != "" || $sNit != null && $sMetodoPago != "" || $sMetodoPago != null){


          //SE TRAE EL TOTAL DE LA FACTURA
          $sqltotalfact = "SELECT SUM(VentaDetalle_TotalProducto) FROM ventas_auxiliar_ard";
          $totalFact = mysqli_query($conexion, $sqltotalfact);


          //SE ALMACENA EL TOTAL DEL PRODUCTO
          $total = 0;
          while ($mostrar = mysqli_fetch_array($totalFact)) {
          $total = $mostrar[0];
          }



          //SE GUARDA LA INFORMACIÓN DE VENTAS AUXILIAR EN VENTAS DETALLE
          $consultaVentaDetalle = "INSERT INTO ventas_detalle_ard SELECT * FROM ventas_auxiliar_ard";
          $resultadoVentaDetalle = mysqli_query($conexion,$consultaVentaDetalle);


          //SE BORRA LA TABLA TEMPORAL VENTAS AUXILIAR
          $consultaBorrar = "DELETE FROM `ventas_auxiliar_ard`";
          $resultadoBorrar = mysqli_query($conexion,$consultaBorrar);



          //SE TOMA EL ID DE LA VENTA FINAL
          $sqlidventa = "SELECT IdCorrelativoVenta FROM ventas_detalle_ard ORDER BY IdCorrelativoVenta DESC LIMIT 1";
          $idVenta = mysqli_query($conexion, $sqlidventa);

          $ventaId = 0;
          while ($mostrar2 = mysqli_fetch_array($idVenta)) {
               $ventaId = $mostrar2[0];
          }



          //SE TOMA EL ID DEL METODO DE PAGO PARA LA FACTURA
          $sqlidmpago = "SELECT MetodoPago_Tipo, IdMetodoPago FROM `metodo_pago_ard` WHERE MetodoPago_Tipo = '$sMetodoPago'";
          $idmpago = mysqli_query($conexion, $sqlidmpago);

          $sMetodoPagoId = 0;
          while ($mostrar3 = mysqli_fetch_array($idmpago)) {
               $sMetodoPagoId = $mostrar3['IdMetodoPago'];
          }


          //SE GUARDA LA INFORMACIÓN DE LA VENTA EN LA TABLA VENTAS ARD
          $consultaGuardarVenta = "INSERT INTO `ventas_ard`(`IdCorrelativoVenta`, `Venta_FechaVenta`, `Venta_Total`, `Venta_NITCliente`, `Venta_UsuarioVenta`, `Venta_IdTipoPago`) 
          VALUES ('$ventaId','$sFechaVenta','$total','$sNit','$usuarioVenta','$sMetodoPagoId')";
          $resultadoGuardarVenta = mysqli_query($conexion,$consultaGuardarVenta);



          //SE ACTUALIZA EL STOCK DEL INVENTARIO, BORRANDO LA TABLA INVENTARIO_ARD E INSERTANDOLE LA TABLA INVENTARIO_AUX_ARD
          $consultaQuitarLlaves = "SET FOREIGN_KEY_CHECKS = 0"; 
          $consultaDelete = "DELETE FROM `inventario_ard`";
          $consultaAux = "INSERT INTO `inventario_ard` SELECT * FROM `inventario_aux_ard`";
          $consultaPonerLlaves = "SET FOREIGN_KEY_CHECKS = 1";

          //EJECUTAMOS LA LOGICA
          $resultadoQuitarLlaves = mysqli_query($conexion, $consultaQuitarLlaves);
          $resultadoDelete = mysqli_query($conexion, $consultaDelete);
          $resultadoAux = mysqli_query($conexion, $consultaAux);
          $resultadoPonerLlaves = mysqli_query($conexion, $consultaPonerLlaves);


}


?>