<?php 
	require 'conexionVideo.php';

	$sql=" SELECT FORMAT(copias, 2) from pel";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	$sql="SELECT SUM(total) AS totalfacturas FROM fac";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT MAX(precio*copias) as MAX, MIN(precio*copias) as MIN, AVG(precio*copias) as AVG FROM pel";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	$sql="SELECT COUNT(*) as count FROM pel WHERE tipo='COMEDIA'";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	//print_r($datos);
	echo "<br>";

?>