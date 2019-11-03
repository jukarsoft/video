<?php 
	require 'conexionVideo.php';


	
	$sql="SELECT p_num, titulo, tipo FROM pel ORDER BY titulo ASC";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	echo "<br>";
	$sql="SELECT p_num, titulo, tipo FROM pel ORDER BY 2 DESC";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}

	echo "<br>";
	$sql="SELECT p_num, tipo, titulo  FROM pel ORDER BY tipo, titulo";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}

	//print_r($datos);
	echo "<br>";

?>