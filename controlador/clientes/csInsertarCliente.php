<?php


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");

$sNit = $_POST["cnit"];
$sNombres = $_POST["cnombres"];
$sApellidos = $_POST["capellidos"];
$sDireccion = $_POST["cdireccion"];
$sTelefono = $_POST["ctelefono"];
$sEmail = $_POST["cemail"];
$sBeneficios = $_POST["cbeneficios"];
$sSector = $_POST["csector"];

//SE OBTIENE EL SECTOR SEGÚN EL ID
$sqlsector = "SELECT * FROM sectorizacion_clientes_ard WHERE Sector_Nombre_Ruta = '$sSector'";


//SE EJECUTA EL QUERY CON UNA VARIABLE PARA EL RECORRIDO
$idSector = mysqli_query($conexion, $sqlsector);


//RECORRER CADA COLUMNA HASTA ENCONTRARLO
while ($find = mysqli_fetch_array($idSector)) {
    $sectorId = $find['IdSector'];
}


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "INSERT INTO `clientes_ard`(`Cliente_NIT`, `Cliente_Nombres`, 
`Cliente_Apellidos`, `Cliente_Direccion`, `Cliente_Telefono`, `Cliente_Email`, 
`Cliente_Beneficios`, `Cliente_IdSector`) 
VALUES ('$sNit','$sNombres','$sApellidos','$sDireccion',
'$sTelefono','$sEmail','$sBeneficios','$sectorId')";


$resultado = mysqli_query($conexion,$consulta);



if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Cliente Registrado correctamente");
        window.location.href="../../vista/clientes";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/clientes";
    </script>';
    mysqli_close($conexion);
}
?>