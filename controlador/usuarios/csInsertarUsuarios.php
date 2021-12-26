<?php

//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$sNombreusuarioasignado = $_POST["nasignado"];
$sNombreusuario = $_POST["nombreusuario"];
$sContrasena = $_POST["contrasena"];
$sPermiso = $_POST["permiso"];


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "INSERT INTO `login_ard`(`Nombre_Usuario_Ard`, `Usuario_Ard`, `Clave_Ard`, `Permiso_Ard`) VALUES 
('$sNombreusuarioasignado','$sNombreusuario','$sContrasena','$sPermiso')";

$resultado = mysqli_query($conexion,$consulta);


//SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Usuario Registrado correctamente");
        window.location.href="../../vista/usuarios.php";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/usuarios.php";
    </script>';
    mysqli_close($conexion);
}

clearstatcache();
?>