<?php

$host = "ec2-46-137-124-19.eu-west-1.compute.amazonaws.com";
$user = "ezsixynnhzciyd";
$password = "469ba3bf25bcbe7d3947b77a1fac035b11a161eb880e6da99fba55919b8a887a";
$dbname = "dc0i5j4frkacqj";
$port = "5432";

try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";

  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Echec de la connexion: ' . $e->getMessage();
}
  ?>
