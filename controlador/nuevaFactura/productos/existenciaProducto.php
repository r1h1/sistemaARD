<?php 
include("../../csBDDCon.php");


$producto = $_POST['producto'];

if($producto == ""){

}

else{
	
	$sql="SELECT IdProducto,Producto_Cantidad from inventario_ard where Producto_Nombre='$producto'";

	$result=mysqli_query($conexion,$sql);


	$cadena="<label for='inputSueldo' class='form-label'>Cantidad En Existencia</label>";

    
	$existencia = 0;
	while ($ver=mysqli_fetch_row($result)) {
		$existencia = $ver[1];
	}

	$cadena=$cadena.'<input type="text" class="form-control" id="cantExistencia" name="cantidad" value='.$existencia.' readonly></input>';

	echo  $cadena."";
	clearstatcache();

}	
	

?>