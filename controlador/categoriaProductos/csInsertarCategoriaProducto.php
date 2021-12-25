<?php

$sNCategoria = $_POST["nCategoria"];
$sDescripcion = $_POST["descripcion"];


//TRAEMOS EL db.php PARA VALIDAR LA BASE DE DATOS
include("../csBDDCon.php");


//SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
$consulta = "INSERT INTO `categoria_productos_ard`(`CategoriaP_Nombre`, 
`CategoriaP_Descripcion`) VALUES ('$sNCategoria','$sDescripcion')";


$resultado = mysqli_query($conexion,$consulta);



if ($resultado == 1) {
    echo'<script type="text/javascript">
        alert("Categoría registrada correctamente");
        window.location.href="../../vista/categoriaProductos.php";
    </script>';
    mysqli_close($conexion);
}
//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else{
    echo'<script type="text/javascript">
        alert("Error al insertar, verifique e intente nuevamente.");
        window.location.href="../../vista/categoriaProductos.php";
    </script>';
    mysqli_close($conexion);
}
?>