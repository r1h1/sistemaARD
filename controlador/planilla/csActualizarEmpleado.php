<?php

include("../../controlador/csBDDCon.php");


//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_POST["txtid"];
$sPrimerNombre = $_POST["pnempleado"];
$sSegundoNombre = $_POST["snempleado"];
$sTercerNombre = $_POST["pnempleado"];
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

if ($sPrimerNombre !=null && $sPrimerApellido !=null && $sDPI !=null && $sPuesto !=null && $sSueldoInicial !=null) {

    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `planilla_ard` SET `Empleado_PrimerNombre`='$sPrimerNombre',`Empleado_SegundoNombre`='$sSegundoNombre',
    `Empleado_TercerNombre`='$sTercerNombre',`Empleado_PrimerApellido`='$sPrimerApellido',`Empleado_SegundoApellido`='$sSegundoApellido',
    `Empleado_DPI`='$sDPI',`Empleado_FechaNacimiento`='$sFechaNacimiento',`Empleado_Direccion`='$sDireccion',
    `Empleado_Telefono`='$sTelefono',`Empleado_Puesto`='$sPuesto',`Empleado_SueldoInicial`='$sSueldoInicial',
    `Empleado_SueldoFinal`='$sSueldoFinal',`Empleado_JornadaLaboral`='$sTipoDeJornada',
    `Empleado_FechaContratacion`='$sFechaContratacion',`Empleado_FechaRetiro`='$sFechaRetiro',`Empleado_MotivoRetiro`='$sMotivoRetiro',
    `Empleado_Beneficios`='$sBeneficio' WHERE `IdEmpleado` = '$id'";

    $resultado = mysqli_query($conexion, $consulta);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1) {
        echo '<script type="text/javascript">
            alert("Editado correctamente");
            window.location.href="../../vista/planilla.php";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/planilla.php";
        </script>';
        mysqli_close($conexion);
    }
}

?>