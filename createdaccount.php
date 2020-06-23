<?php
include_once("php/code.php");

$user = new Users;
$work = new Works;
require('php/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/MMI</title>

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">A/MMI</a>
        <?php
            if($Connected == true){
        ?>
        <div class="ml-auto">
            <p class="navbar-brand d-inline"><?php if(isset($_SESSION["account"]["username"]))
            {
            echo($_SESSION["account"]["username"]);
            }
            ?></p>
            <a class="navbar-brand d-inline" href="logout.php">LOGOUT</a>
        </div>
        <?php }
            else{
        ?>
        <a class="navbar-brand ml-auto" href="login.php">LOGIN</a>
        <?php }
        ?>
    </nav>

    <div class="container">

        <h1>Successful account creation</h1>
        <p>
            Your account have been created.
            Please <a href="login.php">login</a> to access the member version of the website.

        </p>


    </div>

</body>
</html>
