<?php
include ("php/code.php");

$user = new Users;
$work = new works;

require ('php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>A-MMI - Collection</title>

      <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/e5c056301d.js" crossorigin="anonymous"></script>

      <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body class="blacktext" data-barba="wrapper">
    <div class="loading-container">
      <div class="loading-screen">
      </div>
    </div>
    <main data-barba="container" data-barba-namespace="collection">
      <nav class="navbar navbar-light">
          <a class="navbar-brand bold" href="index.php">A-MMI</a>
          <div class="ml-auto">
            <a class="navbar-brand bold" href="collection.php">Our collection</a>
            <a class="navbar-brand bold" href="about.php">About us</a>
            <?php if($Connected == true){?>
            <p class="navbar-brand d-inline"><?php if(isset($_SESSION["account"]["username"]))
            {echo($_SESSION["account"]["username"]);}?>
            </p>
            <a class="navbar-brand d-inline" href="logout.php">LOGOUT</a>
            <?php}?>
          </div>
      </nav>
      <a href="login.php" class="dot"><i class="fas fa-circle"></i></a>

      <div class="container main">
        <h1>Discover our collection</h1>
        <ul class="list-group collec">
        <?php
          $allworks = $work->get_works();
          foreach($allworks as $w)
          {
        ?>
        <li class="list-group-item"><a href="project.php?id=<?= $w->id ?>"><?php echo($w->title); ?></a></li>
        <?php
          }
        ?>
        </ul>
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
