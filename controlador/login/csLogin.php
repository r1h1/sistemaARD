<?php

//TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
$user = $_POST["usuario"];
$pass = $_POST["clave"];
$permiso = $_POST["rol"];


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");



//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "SELECT * FROM login_ard WHERE Usuario_Ard = '$user' AND  Clave_Ard = '$pass' AND Permiso_Ard = '$permiso'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);



//SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
if ($filas>0) {
   
    //INICIAMOS SESIÓN Y ALMACENAMOS
    session_start();
    $_SESSION["usuario"] = $user;

    if($permiso == 'admin'){
        header("location:../../vista/dashboard.php");
    }
   
}


//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Usuario, Contraseña o Rol incorrecto, verifique.");
        window.location.href="../../index.php";
    </script>';
}

//LIBERAR MEMORIA DE LOS DATOS
mysqli_free_result($resultado);

?>
