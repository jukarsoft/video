<?php 
	require 'conexionVideo.php';

	$sql="SELECT cli.cliid, nombre, apel, f_num, total, alq, dev FROM cli LEFT JOIN  fac ON cli.cliid=fac.cliid";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT cli.cliid, nombre, apel, f_num, total, alq, dev FROM cli LEFT JOIN  fac ON cli.cliid=fac.cliid WHERE fac.f_num is NULL";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	echo "<hr>";


	$sql="SELECT cli.cliid, nombre, apel, f_num, total, alq, dev FROM cli RIGHT JOIN  fac ON cli.cliid=fac.cliid";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	
	echo "<br>";


?>