<?php 
	require 'conexionVideo.php';

	$sql="SELECT DISTINCT tipo FROM pel;";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	
	//print_r($datos);
	echo "<br>";
	//echo $datos['COUNT(*)'];
	
?>