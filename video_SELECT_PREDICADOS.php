<?php 
	require 'conexionVideo.php';


	$sql="SELECT TITULO, COPIAS FROM pel WHERE COPIAS>= 1 and COPIAS<=3";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT TITULO, COPIAS FROM pel WHERE COPIAS BETWEEN 1 AND 3";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT TITULO, COPIAS FROM pel WHERE tipo='COMEDIA' OR tipo='DRAMA' OR tipo='HORROR'";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	

	$sql="SELECT TITULO, COPIAS FROM pel WHERE tipo IN ('COMEDIA', 'DRAMA', 'HORROR')";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT TITULO, COPIAS FROM pel WHERE tipo NOT IN ('COMEDIA', 'DRAMA', 'HORROR')";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	echo "like";
	echo "<br>";
	$sql="SELECT titulo FROM pel WHERE titulo LIKE '_O%'";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	echo "<br>";
	$sql="SELECT titulo FROM pel WHERE titulo LIKE 'C%'";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	$sql="SELECT titulo FROM pel WHERE titulo LIKE '%OO%'";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	
	
	//print_r($datos);
	echo "<br>";

?>