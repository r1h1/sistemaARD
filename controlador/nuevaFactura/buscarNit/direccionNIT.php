<?php

include("../../csBDDCon.php");


$nit = $_POST[trim('ingresoNIT')];


if ($nit == "" || $nit == null) {
}



if ($nit == "N" || $nit == "n") {
	echo "<a href='#productosAVender' class='btn btn-dark' name='Agregar Productos'>Agregar Productos</a>";
}


if($nit == "CF" || $nit == "cf"){
	echo "<a href='#productosAVender' class='btn btn-dark' name='Agregar Productos'>Agregar Productos</a>";;
}



if ($nit != "" && $nit != "N" && $nit != "CF") {

	$sql = "SELECT IdCliente, Cliente_NIT, Cliente_Nombres, Cliente_Apellidos, Cliente_Direccion FROM `clientes_ard` WHERE Cliente_NIt='$nit'";

	$result = mysqli_query($conexion, $sql);

	$cadena = "";


	while ($ver = mysqli_fetch_row($result)) {

		if ($ver[0] != null) {
			$cadena = $cadena . "<input type='text' class='form-control' name='nombreNIT' value='$ver[4]' readonly  max='40'></input>";
			$cadena = $cadena . "<br>";
			$cadena = $cadena . "<a href='#productosAVender' class='btn btn-dark' name='Agregar Productos'>Agregar Productos</a>";
		}
	}

	echo ($cadena);
}
