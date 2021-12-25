<?php

$sNSector = $_POST["nsector"];
$sOrigen = $_POST["desdeorigen"];
$sHasta = $_POST["hastadestino"];
$sPiloto = $_POST["pilotoasignado"];
$sTipoVehiculo = $_POST["tipovehiculo"];
$sYearVehiculo = $_POST["yearvehiculo"];
$sModeloVehiculo = $_POST["modelo"];
$sColorVehiculo = $_POST["color"];
$sPlacaVehiculo = $_POST["placa"];
$sExplicacionRuta = $_POST["explicacionruta"];


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "INSERT INTO `sectorizacion_clientes_ard`(`Sector_Nombre_Ruta`, `Sector_DesdeOrigen`, 
`Sector_HastaOrigen`, `Sector_PilotoAsignado`, `Sector_TipoDeVehiculo`, `Sector_YearVehiculo`, `Sector_ModeloVehiculo`,
 `Sector_ColorVehiculo`, `Sector_PlacaVehiculo`, `Sector_ExplicacionRuta`) 
VALUES ('$sNSector','$sOrigen','$sHasta','$sPiloto','$sTipoVehiculo','$sYearVehiculo','$sModeloVehiculo','$sColorVehiculo',
'$sPlacaVehiculo','$sExplicacionRuta')";


$resultado = mysqli_query($conexion,$consulta);



if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Sector/Ruta registrada correctamente");
        window.location.href="../../vista/sectorizacionClientes.php";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/sectorizacionClientes.php";
    </script>';
    mysqli_close($conexion);
}
?>