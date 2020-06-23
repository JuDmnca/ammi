<?php

	$DB_DSN = "pgsql:host=dc0i5j4frkacqj;host=ec2-46-137-124-19.eu-west-1.compute.amazonaws.com
";
	$DB_USER = "ezsixynnhzciyd";
	$DB_PASSWORD = "469ba3bf25bcbe7d3947b77a1fac035b11a161eb880e6da99fba55919b8a887a";

	try {
		$db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
		$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
		echo 'Echec de la connexion : ' . $e->getMessage();
	}

?>
