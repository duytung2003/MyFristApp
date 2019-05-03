<?php 
$connection = pg_connect("host=ec2-174-129-208-118.compute-1.amazonaws.com port=5432 dbname=d6lidk4jftv962 user=pgmlnflthhccbg password=594f3a2cf7337f44b76dd7985224e7c7d9464c67a2aa44c19539cb3660feab4e");
	if(!$connection) {
     die("Database connection failed");
 	}
?>
