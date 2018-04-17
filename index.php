<?php
include("connect.php"); //establish database connection   
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siedlerspiel</title>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://hammerjs.github.io/dist/hammer.js"></script>
    
    <link rel="stylesheet" href="jqueryUI/jquery-ui.min.css">
    <script src="jqueryUI/jquery-ui.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>

    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>

    <div id="matchfield">
      <div id="overlay">
        <div class="close">
          <span id="x">X</span>
        </div>
      </div>
      <div class='circle-container'>
        <a href='#' class='center'><img src='img/steeringWheel.png'></a>
        <a href='#' class='deg0 ship'>Testblabla<img src='img/pirate.png'></a>
        <a href='#' class='deg60 ship'><img src='img/pirate.png'></a>
        <a href='#' class='deg120 ship'><img src='img/pirate.png'></a>
        <a href='#' class='deg180 ship'><img src='img/pirate.png'></a>
        <a href='#' class='deg240 ship'><img src='img/pirate.png'></a>
        <a href='#' class='deg300 ship'><img src='img/pirate.png'></a>
      </div>
    </div>

    <div id="sidebar" class="right-to-left">
      <div id="log"></div>
      <div id="menu">
        menu entries
      </div>
    </div>

  </body>
</html>