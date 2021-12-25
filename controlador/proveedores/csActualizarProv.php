<?php

include("../../controlador/csBDDCon.php");


//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_POST["txtid"];
$sNombreProv = $_POST["nprov"];
$sDireccion = $_POST["direccion"];
$sTelefono = $_POST["telefono"];
$sEmail = $_POST["email"];
$sNIT = $_POST["nit"];
$sPresentaciones = $_POST["presentaciones"];

if ($sNombreProv !=null && $sDireccion !=null && $sTelefono !=null) {

    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `proveedores_ard` SET `Prov_Nombre`='$sNombreProv',`Prov_Direccion`='$sDireccion',`Prov_NIT`='$sNIT',
    `Prov_Telefono`='$sTelefono',`Prov_Email`='$sEmail',
    `Prov_Presentaciones`='$sPresentaciones' WHERE IdProveedor='$id'";

    $resultado = mysqli_query($conexion, $consulta);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1) {
        echo '<script type="text/javascript">
            alert("Proveedor Editado correctamente");
            window.location.href="../../vista/proveedores.php";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/proveedores.php";
        </script>';
        mysqli_close($conexion);
    }
}

?>