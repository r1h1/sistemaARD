<?php 
include("../../csBDDCon.php");


$producto = $_POST['producto'];


if($producto == ""){

}

else{
	echo "<label for='inputDireccion' class='form-label'>Cant. a vender <span class='red' style='color: red;'>*</span></label>";
	echo '<input type="number" class="form-control" id="cantVender" name="cantidadAVender" placeholder="Ej: 2" min="1" max="100000000" required>';
	clearstatcache();
}	
	

?>