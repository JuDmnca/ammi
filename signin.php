<?php
include_once("php/code.php");

$user = new Users;
if(isset($_SESSION["account"]["id"]))
{
    header("Location: /ammi%20/");
}
if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
	{
    	if($_POST['uname'] != NULL && $_POST['psw'] != NULL)
    	{
        	$user->create($_POST["uname"], $_POST["psw"]);
            header("Location: /createdaccount.php");
    	}
    	else
    	{
        	echo("Remplis le formulaire");
    	}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/MMI - Login</title>

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">A/MMI</a>
    </nav>

    <div class="container">

        <h1>Sign in</h1>
        <form action="signin.php" method="post">
            <div class="form-group">
                <label for="uname"><b>Username</b></label>
                <input class="form-control" type="text" placeholder="Enter Username" name="uname" required>
            </div>
            <div class="form-group">
                <label for="psw"><b>Password</b></label>
                <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
            </div>
            <div class="group">
                <a href="login.php">I already have an account ? Log in</a>
                <button type="submit" name="submit" class="btn btn-dark" value="OK">Sign in</button>
            </div>
        </form>
    </div>
    </form>
</body>
</html>
