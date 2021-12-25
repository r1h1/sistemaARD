<?php

include("../../csBDDCon.php");


$nit = $_POST[trim('ingresoNIT')];


if ($nit == "") {
	
}

if ($nit == "N") {
	
}

if($nit == "CF" || $nit == "cf"){

}



if ($nit != "" && $nit != "N" && $nit != "CF") {

	$sql = "SELECT IdCliente, Cliente_NIT, Cliente_Nombres, Cliente_Apellidos, Cliente_Direccion FROM `clientes_ard` WHERE Cliente_NIt='$nit'";

	$result = mysqli_query($conexion, $sql);

    $cadena = "";


	while ($ver = mysqli_fetch_row($result)) {

		if ($ver[0] == '') {
			echo ("<label for='inputSueldo' class='form-label'>No se encontró el Cliente</label>");
		}

		if ($ver[0] != null) {
			$cadena = $cadena . "<input type='text' class='form-control' name='nombreNIT' value='$ver[3]' readonly  max='40'></input>";
		}
	}

	echo ($cadena);
}
