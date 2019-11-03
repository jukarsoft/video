<?php 
	require 'conexionVideo.php';


	$sql="SELECT TITULO, COPIAS FROM pel WHERE COPIAS BETWEEN 1 AND 3";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($datos=mysqli_fetch_assoc($resultado)) {
		print_r($datos);
		echo "<br>";
	}
	echo "<br>";

	
	
	
	//print_r($datos);
	echo "<br>";

?>