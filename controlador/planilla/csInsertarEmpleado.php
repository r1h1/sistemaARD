<?php

$sPrimerNombre = $_POST["pnempleado"];
$sSegundoNombre = $_POST["snempleado"];
$sTercerNombre = $_POST["tnempleado"];
$sPrimerApellido = $_POST["paempleado"];
$sSegundoApellido = $_POST["saempleado"];
$sDPI = $_POST["dpi"];
$sFechaNacimiento = $_POST["fechanac"];
$sDireccion = $_POST["direccion"];
$sTelefono = $_POST["telefono"];
$sPuesto = $_POST["puesto"];
$sSueldoInicial = $_POST["sueldoinicial"];
$sSueldoFinal = $_POST["sueldofinal"];
$sTipoDeJornada = $_POST["tipojornada"];
$sFechaContratacion = $_POST["fechacontratacion"];
$sFechaRetiro = $_POST["fecharetiro"];
$sMotivoRetiro = $_POST["motivoretiro"];
$sBeneficio = $_POST["beneficios"];


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "INSERT INTO `planilla_ard`(`Empleado_PrimerNombre`, `Empleado_SegundoNombre`, 
`Empleado_TercerNombre`, `Empleado_PrimerApellido`, `Empleado_SegundoApellido`, `Empleado_DPI`, `Empleado_FechaNacimiento`,
 `Empleado_Direccion`, `Empleado_Telefono`, `Empleado_Puesto`, `Empleado_SueldoInicial`, `Empleado_SueldoFinal`, 
 `Empleado_JornadaLaboral`, `Empleado_FechaContratacion`, `Empleado_FechaRetiro`, `Empleado_MotivoRetiro`, `Empleado_Beneficios`) 
 VALUES ('$sPrimerNombre','$sSegundoNombre','$sTercerNombre','$sPrimerApellido','$sSegundoApellido','$sDPI','$sFechaNacimiento',
 '$sDireccion','$sTelefono','$sPuesto','$sSueldoInicial','$sSueldoFinal','$sTipoDeJornada','$sFechaContratacion','$sFechaRetiro',
 '$sMotivoRetiro','$sBeneficio')";


$resultado = mysqli_query($conexion,$consulta);



if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Empleado Registrado correctamente");
        window.location.href="../../vista/planilla.php";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/planilla.php";
    </script>';
    mysqli_close($conexion);
}
?>