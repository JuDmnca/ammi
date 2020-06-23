<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
$work = new Works;
require('php/session.php');

if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "ADD")
	{
    	if($_POST['title'] != NULL && $_POST['date'] != NULL && $_POST['description'] != NULL && $_POST['media'] != NULL && $_POST['artist'] != NULL && $_POST['link'] != NULL)
    	{
        	$work->create($_POST["title"], $_POST["date"], $_POST["description"], $_POST["media"],$_POST["video"], $_POST["artist"], $_POST["link"]);
        	header("Location: /ammi%20/");
    	}
    	else
    	{
        	echo("Please make sure the form is complete.");
    	}
	}
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/MMI - New project</title>

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

	<?php 
        if($Connected == false){
            echo '<body onLoad="alert(\'You have to be an administrator to add a project! Please login and try again.\')">';
            echo '<meta http-equiv="refresh" content="0;URL=login.php">';
        }
    ?>

    <form action="newproject.php" method="post">
    	<div class="form-group">
            <label for="title" >Title of the project</label> : <input class="form-control" type="text" name="title"/></input>
        </div>
        <div class="form-group">
            <label for="date" >Date</label> : <input class="form-control" type="text" name="date"/></input>
        </div>
        <div class="form-group"> 
            <label for="description" >Description</label> : <input class="form-control" type="text" name="description"/></input>
        </div>
        <div class="form-group">
            <label for="media" >Link of media</label> : <input class="form-control" type="text" name="media"/></input>
        </div>
        <div class="form-group">
            <label for="video" >Video</label> : <input class="form-control" type="text" name="video"/></input>
        </div>
        <div class="form-group">
            <label for="artist" >Artist</label> : <input class="form-control" type="text" name="artist"/></input>
        </div>
        <div class="form-group">
            <label for="link" >Where to find this project (link)</label> : <input class="form-control" type="text" name="link"/></input>
        </div>
        <button type="submit" name="submit" class="btn btn-dark" value="ADD">Add this project</button>
    </form>






