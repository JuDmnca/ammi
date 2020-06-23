<?php
include_once("php/code.php");

$user = new Users;
if(isset($_SESSION["account"]["id"]))
{
    header("Location: /ammi%20/about.php");
}
if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
	{
    	if($_POST['uname'] != NULL && $_POST['psw'] != NULL)
    	{
        	$user->connect($_POST["uname"], $_POST["psw"]);
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
  <body data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="login">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">A/MMI</a>
      </nav>
      <div class="container">
          <h1 class="is-animated">Login</h1>
          <form action="login.php" method="post" class="is-animated">
              <div class="form-group">
                  <label for="uname"><b>Username</b></label>
                  <input class="form-control" type="text" placeholder="Enter Username" name="uname" required>
              </div>
              <div class="form-group">
                  <label for="psw"><b>Password</b></label>
                  <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
              </div>
              <div class="group">
                  <button type="submit" name="submit" class="btn btn-dark" value="OK">Login</button>
              </div>
          </form>
      </div>
    </main>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Barba Core -->
    <script src="https://unpkg.com/@barba/core"></script>

    <!-- GSAP for animation -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

    <!-- Some basic helper functions -->
    <script src="js/helper.js"></script>

    <!-- Main JS file -->
    <script src="js/main.js"></script>
  </body>
</html>
