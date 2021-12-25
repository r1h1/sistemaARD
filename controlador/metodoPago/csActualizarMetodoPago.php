<?php

include("../../controlador/csBDDCon.php");


//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_POST["txtid"];
$sTipoPago = $_POST["tipoPago"];
$sRecargoPago = $_POST["recargoPago"];



if ($id !=null && $sTipoPago !=null && $sRecargoPago !=null) {

    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `metodo_pago_ard` SET `MetodoPago_Tipo`='$sTipoPago',`MetodoPago_Recargo`='$sRecargoPago' WHERE `IdMetodoPago`='$id'";
    

    $resultado = mysqli_query($conexion, $consulta);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1) {
        echo '<script type="text/javascript">
            alert("Editado correctamente");
            window.location.href="../../vista/metodoPago";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/metodoPago";
        </script>';
        mysqli_close($conexion);
    }
}

?>