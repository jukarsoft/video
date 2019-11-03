<?php 
	require 'conexionVideo.php';

	$sql="SELECT COUNT(*) as numreg FROM pel";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	$datos=mysqli_fetch_assoc($resultado);
	print_r($datos);
	echo "<br>";
	//echo $datos['COUNT(*)'];
	echo $datos['numreg'];
	echo "<br>";



 ?>