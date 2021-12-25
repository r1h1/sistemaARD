<?php

include("../../csBDDCon.php");


$nit = $_POST[trim('ingresoNIT')];


if ($nit == "" || $nit == null) {
	echo ("<div class='alert alert-danger' role='alert'>
	Ingrese el NIT, CF o N si desea crear un 
	nuevo Cliente.
  </div>");
}



if ($nit == "N" || $nit == "n") {
	echo ("<a href='../vista/clientes.php' class='btn btn-success'>Nuevo Cliente➕</a>");
}


if($nit == "CF" || $nit == "cf"){
	echo('<input type="text" class="form-control" name="nombreNIT" value="CF" readonly></input>');
	
}



if ($nit != "" && $nit != "N" && $nit !="n" && $nit != "CF") {

	$sql = "SELECT IdCliente, Cliente_NIT, Cliente_Nombres, Cliente_Apellidos, Cliente_Direccion FROM `clientes_ard` WHERE Cliente_NIt='$nit'";

	$result = mysqli_query($conexion, $sql);

	$cadena = "";


	while ($ver = mysqli_fetch_row($result)){

		if ($ver[0] == '') {
			echo ("<label for='inputSueldo' class='form-label'>No se encontró el Cliente</label>");
		}

		if ($ver[0] != null) {
			$cadena = $cadena . "<input type='text' class='form-control' id='nombreNIT' name='nombreNIT' value='$ver[2]' readonly  max='40'></input>";
		}
	}

	echo ($cadena);
}

return $nit;
