<?php

$sNombreProv = $_POST["nprov"];
$sDireccion = $_POST["direccion"];
$sTelefono = $_POST["telefono"];
$sEmail = $_POST["email"];
$sNIT = $_POST["nit"];
$sPresentaciones = $_POST["presentaciones"];


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "INSERT INTO `proveedores_ard`(`Prov_Nombre`, `Prov_Direccion`,`Prov_NIT`, 
`Prov_Telefono`, `Prov_Email`,
`Prov_Presentaciones`) 
VALUES ('$sNombreProv','$sDireccion','$sNIT','$sTelefono','$sEmail','$sPresentaciones')";


$resultado = mysqli_query($conexion,$consulta);



if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Proveedor Registrado correctamente");
        window.location.href="../../vista/proveedores.php";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/proveedores.php";
    </script>';
    mysqli_close($conexion);
}
?>