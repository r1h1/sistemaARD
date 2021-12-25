<?php

//NOMBRE DEL SERVIDOR
$dbserver = 'localhost';

//NOMBRE DEL USUARIO
$dbuser_name = 'root';

//CONTRASEÑA
$dbpassword = '';

//NOMBRE BDD
$dbnombre_bdd = 'bdddistribuidoraard';

//STRING DE CONEXIÓN A LA BASE DE DATOS
$conexion = mysqli_connect($dbserver, $dbuser_name, $dbpassword, $dbnombre_bdd);

//SI NO LO ENCUENTRA, DICE QUE NO HAY CONEXIONES EXISTENTES
if (!$conexion) {
    die("No hay conexiones existentes: " . mysqli_connect_error());
}
?>