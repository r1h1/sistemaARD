<?php

$id = $_POST["txtid"];
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


if ($sNSector !=null && $sOrigen !=null && $sHasta !=null && $sExplicacionRuta !=null) {

    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `sectorizacion_clientes_ard` SET `Sector_Nombre_Ruta`='$sNSector',
    `Sector_DesdeOrigen`='$sOrigen',`Sector_HastaOrigen`='$sHasta',`Sector_PilotoAsignado`='$sPiloto',
    `Sector_TipoDeVehiculo`='$sTipoVehiculo',`Sector_YearVehiculo`='$sYearVehiculo',`Sector_ModeloVehiculo`='$sModeloVehiculo',
    `Sector_ColorVehiculo`='$sColorVehiculo',`Sector_PlacaVehiculo`='$sPlacaVehiculo',`Sector_ExplicacionRuta`='$sExplicacionRuta' 
    WHERE IdSector = '$id'";

    $resultado = mysqli_query($conexion, $consulta);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1) {
        echo '<script type="text/javascript">
            alert("Sector/Ruta editada correctamente");
            window.location.href="../../vista/sectorizacionClientes.php";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/sectorizacionClientes.php";
        </script>';
        mysqli_close($conexion);
    }
}

?>