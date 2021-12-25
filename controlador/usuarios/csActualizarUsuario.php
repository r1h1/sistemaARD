<?php

include("../../controlador/csBDDCon.php");


//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$id = $_POST["txtid"];
$sNombreusuarioasignado = $_POST["nasignado"];
$sNombreusuario = $_POST["nombreusuario"];
$sContrasena = $_POST["contrasena"];
$sPermiso = $_POST["permiso"];

if ($sNombreusuario != null && $sNombreusuario != null && $sContrasena != null && $sPermiso != null) {
    //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
    $consulta = "UPDATE `login_ard` SET `Nombre_Usuario_Ard`='" . $sNombreusuarioasignado . "'
    ,`Usuario_Ard`='" . $sNombreusuario . "',`Clave_Ard`='" . $sContrasena . "',`Permiso_Ard`='" . $sPermiso . "' WHERE `IdUsuario`='" . $id . "'";
    $resultado = mysqli_query($conexion, $consulta);


    //SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
    if ($resultado == 1) {
        echo '<script type="text/javascript">
            alert("Usuario Editado correctamente");
            window.location.href="../../vista/usuarios.php";
        </script>';
        mysqli_close($conexion);
    }
    //SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
    else {
        echo '<script type="text/javascript">
            alert("Error al modificar, verifique e intente nuevamente.");
            window.location.href="../../vista/usuarios.php";
        </script>';
        mysqli_close($conexion);
    }
}

?>