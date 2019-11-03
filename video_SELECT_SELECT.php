<?php 
	require 'conexionVideo.php';


	$sql="SELECT MAX(precio*copias) as MAX, MIN(precio*copias) as MIN, AVG(precio*copias) as AVG FROM pel";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT titulo, precio*copias AS MAX FROM pel WHERE precio*copias = (SELECT MAX(precio*copias) FROM pel)";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT titulo, precio*copias AS MAX FROM pel WHERE precio*copias = (SELECT MAX(precio*copias) FROM pel WHERE tipo='COMEDIA') AND  tipo='COMEDIA'";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	
	//print_r($datos);
	echo "<br>";

?>