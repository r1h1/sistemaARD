<?php

include("../../controlador/csBDDCon.php");


//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_POST["txtid"];
$sNit = $_POST["cnit"];
$sNombres = $_POST["cnombres"];
$sApellidos = $_POST["capellidos"];
$sDireccion = $_POST["cdireccion"];
$sTelefono = $_POST["ctelefono"];
$sEmail = $_POST["cemail"];
$sBeneficios = $_POST["cbeneficios"];
$sSector = $_POST["csector"];


//SE OBTIENE EL SECTOR SEGÚN EL ID
$sqlsector = "SELECT IdSector FROM sectorizacion_clientes_ard WHERE Sector_Nombre_Ruta = '$sSector'";


//SE EJECUTA EL QUERY CON UNA VARIABLE PARA EL RECORRIDO
$idSector = mysqli_query($conexion, $sqlsector);


//RECORRER CADA COLUMNA HASTA ENCONTRARLO
while ($find = mysqli_fetch_array($idSector)) {
    $sectorId = $find['IdSector'];
}


if ($sNit !=null && $sNombres !=null && $sApellidos !=null) {

    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `clientes_ard` SET `Cliente_NIT`='$sNit',
    `Cliente_Nombres`='$sNombres',`Cliente_Apellidos`='$sApellidos',
    `Cliente_Direccion`='$sDireccion',`Cliente_Telefono`='$sTelefono',
    `Cliente_Email`='$sEmail',`Cliente_Beneficios`='$sBeneficios',
    `Cliente_IdSector`='$sectorId' WHERE `IdCliente`='$id'";
    

    $resultado = mysqli_query($conexion, $consulta);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1) {
        echo '<script type="text/javascript">
            alert("Editado correctamente");
            window.location.href="../../vista/clientes.php";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/clientes.php";
        </script>';
        mysqli_close($conexion);
    }
}

?>