<?php 
	require 'conexionVideo.php';

	
	$sql="SELECT f_num, COUNT(*) AS numpel FROM f_p GROUP BY f_num";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	$sql="SELECT f_num, COUNT(*) AS numpel FROM f_p GROUP BY f_num HAVING numpel >3";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT tipo, SUM(copias) AS numpel FROM pel GROUP BY tipo HAVING numpel >3";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	$sql="SELECT f_num, COUNT(*) AS numpel FROM f_p GROUP BY f_num HAVING numpel >3";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";



	
	$sql="SELECT f_num, COUNT(*) AS numpel FROM f_p GROUP BY f_num HAVING COUNT(*)>2 ORDER BY f_num DESC";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	//print_r($datos);
	echo "<br>";

	$sql="SELECT tipo, SUM(copias) AS numpel FROM pel WHERE tipo <> 'CI-FI' GROUP BY tipo HAVING numpel >3 ORDER BY tipo DESC";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}

?>