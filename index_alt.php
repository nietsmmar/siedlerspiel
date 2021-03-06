<?php
header("Content-Type: text/html; charset=utf-8");
include("connect.php"); //establish database connection   
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siedlerspiel</title>

    <!-- JQuery -->
    <script src="jquery/jquery.min.js"></script>

    <script src="jquery/hammer.js"></script>
    
    <link rel="stylesheet" href="jqueryUI/jquery-ui.min.css">
    <script src="jqueryUI/jquery-ui.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="jquery/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="jquery/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="jquery/mdb.min.css" rel="stylesheet">

    <!-- Bootstrap tooltips -->
    <script type="jquery/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="jquery/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="jquery/mdb.min.js"></script>

    <script src="js/main_alt.js"></script>
    <link rel="stylesheet" href="css/main_alt.css">
  </head>

  <body>

    <div id="matchfield">
      <div id="overlay">
        <div class="close">
          <span id="x">X</span>
        </div>
    		<div class="inventory">
    		</div>
      </div>
      <div class='circle-container'>
        <a href='#' class='deg0 ship' id="0"><span class="shipText" id="ship0HP" >X HP</span><img src='img/ship.png' id="shipIMG_0">
            <div id="countIcons">
                <div class="icon"><img src='img/cannon.png' class="countIcon"><span id="0-0">1</span></div>
                <div class="icon"><img src='img/rudder.png' class="countIcon"><span id="0-1">1</span></div>
                <div class="icon"><img src='img/sail.png' class="countIcon"><span id="0-2">1</span></div>
                <span class="stretch"></span>
            </div>
            </a>
        <a href='#' class='deg60 ship' id="1"><span class="shipText" id="ship1HP" >X HP</span><img src='img/ship.png' id="shipIMG_1">
            <div id="countIcons">
                <div class="icon"><img src='img/cannon.png' class="countIcon"><span id="1-0">1</span></div>
                <div class="icon"><img src='img/rudder.png' class="countIcon"><span id="1-1">1</span></div>
                <div class="icon"><img src='img/sail.png' class="countIcon"><span id="1-2">1</span></div>
                <span class="stretch"></span>
            </div>
            </a>
        <a href='#' class='deg120 ship' id="2"><span class="shipText" id="ship2HP" >X HP</span><img src='img/ship.png' id="shipIMG_2">
            <div id="countIcons">
                <div class="icon"><img src='img/cannon.png' class="countIcon"><span id="2-0">1</span></div>
                <div class="icon"><img src='img/rudder.png' class="countIcon"><span id="2-1">1</span></div>
                <div class="icon"><img src='img/sail.png' class="countIcon"><span id="2-2">1</span></div>
                <span class="stretch"></span>
            </div>
            </a>
        <a href='#' class='deg180 ship' id="3"><span class="shipText" id="ship3HP" >X HP</span><img src='img/ship.png' id="shipIMG_3">
            <div id="countIcons">
                <div class="icon"><img src='img/cannon.png' class="countIcon"><span id="3-0">1</span></div>
                <div class="icon"><img src='img/rudder.png' class="countIcon"><span id="3-1">1</span></div>
                <div class="icon"><img src='img/sail.png' class="countIcon"><span id="3-2">1</span></div>
                <span class="stretch"></span>
            </div>
            </a>
        <a href='#' class='deg240 ship' id="4"><span class="shipText" id="ship4HP" >X HP</span><img src='img/ship.png' id="shipIMG_4">
            <div id="countIcons">
                <div class="icon"><img src='img/cannon.png' class="countIcon"><span id="4-0">1</span></div>
                <div class="icon"><img src='img/rudder.png' class="countIcon"><span id="4-1">1</span></div>
                <div class="icon"><img src='img/sail.png' class="countIcon"><span id="4-2">1</span></div>
                <span class="stretch"></span>
            </div>
            </a>
        <a href='#' class='deg300 ship' id="5"><span class="shipText" id="ship5HP" >X HP</span><img src='img/ship.png' id="shipIMG_5">
            <div id="countIcons">
                <div class="icon"><img src='img/cannon.png' class="countIcon"><span id="5-0">1</span></div>
                <div class="icon"><img src='img/rudder.png' class="countIcon"><span id="5-1">1</span></div>
                <div class="icon"><img src='img/sail.png' class="countIcon"><span id="5-2">1</span></div>
                <span class="stretch"></span>
            </div>
            </a>
      </div>
    </div>

    <div id="sidebar" class="right-to-left">
      <div id="log"></div>
      <div id="menu">
    		<div class="kaufenText">Kaufen</div>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyWasser" href="#">Fass Wasser</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyZwieback" href="#">Schiffs- zwieback</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyMatte" href="#">Hängematte</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buySegel" href="#">Segel</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyKanone" href="#">Kanone</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyKugel" href="#">Kanonenkugel</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyRuder" href="#">Ruder</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyRUpgrade" href="#">Ruder Upgrade</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyArmor" href="#">Schiffswand- verstärkung</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyEnter" href="#">Enterhaken</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyWaffen" href="#">Waffen</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyLeiter" href="#">Strickleiter</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyFigur" href="#">Gallionsfigur</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyOrgel" href="#">Schiffsorgel</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buySchatz" href="#">Schatz</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="buyRepair" href="#">Reparaturkit</a>
    		<div class="kaufenText">Aktionen</div>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="actEnter" href="#">Entern</a>
    		<a class="ui-button ui-widget ui-corner-all buyButton" id="actSchiessen" href="#">Schießen</a>
      </div>
    </div>

  </body>
</html>
