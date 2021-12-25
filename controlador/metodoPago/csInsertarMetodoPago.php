<?php


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");

$sTipoPago = $_POST["tipoPago"];
$sRecargoPago = $_POST["recargoPago"];


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "INSERT INTO `metodo_pago_ard`(`MetodoPago_Tipo`, `MetodoPago_Recargo`) 
             VALUES ('$sTipoPago','$sRecargoPago')";


$resultado = mysqli_query($conexion,$consulta);



if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Registrado correctamente");
        window.location.href="../../vista/metodoPago";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/metodoPago";
    </script>';
    mysqli_close($conexion);
}
?>