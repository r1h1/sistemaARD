<?php 
include("../../csBDDCon.php");


$producto = $_POST['producto'];

if($producto == ""){

}

else{
    
	$sql="SELECT IdProducto,Producto_PrecioVenta from inventario_ard where Producto_Nombre='$producto'";

	$result=mysqli_query($conexion,$sql);


	$cadena="<label for='inputDireccion' class='form-label'>Precio<span class='red' style='color: red;'>*</span></label>";

    
	$precioVenta = 0;
	while ($ver=mysqli_fetch_row($result)) {
		$precioVenta = $ver[1];
	}

	$cadena=$cadena.'<input type="text" class="form-control" id="precioVenta" name="precioventa" value='.$precioVenta.' readonly></input>';

	echo  $cadena."";
	clearstatcache();

}	
	

?>