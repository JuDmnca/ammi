<!DOCTYPE html>
<?php
session_start();
//include_once("php/code.php");

$user = new Users;
$work = new Works;
//require('php/session.php');
?>

<?php include ('php/db.php')?>
<?php include ('php/config.php')?>

<?php

  $sql = 'SELECT * FROM Users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();

  print_r ($details);
?>

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>A-MMI</title>

      <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/e5c056301d.js" crossorigin="anonymous"></script>

      <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body class="whitetext" data-barba="wrapper">
    <div class="loading-container">
      <div class="loading-screen">
      </div>
    </div>
    <div class="vimeo-wrapper">
      <div class="overlay"></div>
      <iframe src="https://player.vimeo.com/video/412813271?background=1&autoplay=1&mute=1&loop=1"
      frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <main data-barba="container" data-barba-namespace="home">
      <nav class="navbar navbar-light project">
          <a class="navbar-brand bold" href="index.php">A-MMI</a>
          <div class="ml-auto">
            <a class="navbar-brand bold" href="/collection.php">Our collection</a>
            <a class="navbar-brand bold" href="/about.php">About us</a>
            <?php
                if($Connected == true){
            ?>
              <p class="navbar-brand d-inline"><?php if(isset($_SESSION["account"]["username"]))
              {
              echo($_SESSION["account"]["username"]);
              }
              ?></p>
              <a class="navbar-brand d-inline whitetext" href="logout.php">LOGOUT</a>
          </div>
          <?php }
          ?>
      </nav>
      <a href="login.php" class="dot"><i class="fas fa-circle"></i></a>

      <div class="container main">

        <h1 class="is-animated whitetext">We are <span class="bold">A-MMI</span>,</h1>
        <h1 class="is-animated whitetext">born from creativity.</h1>

        <ul class="list-group list-group-horizontal main fadein">
          <li class="list-group-item bold whitetext">Our latest projects</li>
          <?php
            $allworks = $work->get_works();
            foreach($allworks as $w)
          { ?>
          <li class="list-group-item whitetext"><a href="project.php?id=<?= $w["id"] ?>"><?php echo($w["title"]); ?></a></li>
          <?php } ?>
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

    <!-- Remove Banner -->
   <script src="js/removebanner.js"></script>

  </body>
</html>
