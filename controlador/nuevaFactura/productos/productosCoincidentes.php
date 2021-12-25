<?php 
	$seudonimo = $_GET['nombre'];
	
    include("../../csBDDCon.php");


	$sql = "SELECT IdProducto, Producto_Nombre FROM inventario_ard WHERE seudonimo LIKE '$seudonimo' LIMIT 1";

	$result = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($result) > 0) {
		$productos = mysqli_fetch_object($result);
		$productos->status = 200;
		echo json_encode($productos);
        clearstatcache();
	}else{
		$error = array('status' => 400);
		echo json_encode((object)$error);
        clearstatcache();
	}