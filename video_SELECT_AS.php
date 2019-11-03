<?php 
	require 'conexionVideo.php';

	$sql="SELECT titulo, copias, precio, precio*copias AS inversion FROM pel";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	$sql="SELECT titulo, copias, precio*copias AS inversion FROM pel WHERE precio*copias>60";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	
	//print_r($datos);
	echo "<br>";

?>