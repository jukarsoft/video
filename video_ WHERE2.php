<?php 
	require 'conexionVideo.php';

	$sql="SELECT * FROM pel WHERE tipo=('COMEDIA' or tipo='CI-FI') AND precio>=20";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	
	//print_r($datos);
	echo "<br>";
	//echo $datos['COUNT(*)'];

	$sql="SELECT * FROM fac WHERE dev IS NULL";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	$sql="SELECT * FROM fac WHERE dev IS NOT NULL";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
?>