<?php 
	require 'conexionVideo.php';

	$sql="SELECT * FROM cli INNER JOIN fac ON cli.cliid=fac.cliid";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";
	
	$sql="SELECT * FROM cli, fac WHERE cli.cliid = fac.cliid ORDER BY cli.cliid";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	
	$sql="SELECT nombre, apel, fac.f_num, titulo  FROM cli 
	INNER JOIN fac 
	ON cli.cliid=fac.cliid
	INNER JOIN f_p 
	ON fac.f_num=f_p.f_num
	INNER JOIN pel  
	ON f_p.p_num=pel.p_num
	ORDER BY cli.cliid
	";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	$sql="SELECT nombre, apel, fac.f_num, titulo  FROM cli, fac, f_p, pel  
	WHERE cli.cliid=fac.cliid and fac.f_num=f_p.f_num and f_p.p_num=pel.p_num
	ORDER BY cli.cliid
	";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";


?>