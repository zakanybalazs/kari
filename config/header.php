<?php
session_start();

?>
<html>
<head>
  <meta charset="utf-16">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viapan karácsony</title>
    <link rel="stylesheet" href="assets/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="assets/css/Simple-Vertical-Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/pnotify.custom.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="datatables/datatables.css">
    <!-- <link href="https://www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet"> -->
</head>
<script src="assets/js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
<script src="assets/js/pnotify.custom.js" charset="utf-8"></script>
  <script src="assets/js/datatables.js" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="https://www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/alasql/0.3/alasql.min.js"></script>
<body>
<style media="screen">
html {
  background: url(assets/img/program-background.svg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body {
  background: url(assets/img/program-background.svg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.nav {
  box-shadow: 2px 2px 4px #888888;
}

#emptydiv {
  box-shadow: 2px 2px 8px #888888;
}
  #hidingWell {
    overflow: visible;
    position: absolute;
    z-index: 10000;
    box-shadow: 8px 12px 25px #888888;
  }
  li:hover {
    box-shadow: 2px 2px 6px #888888;
  }
  .navbar {
    background-color: #fff;
  }
</style>
<style media="screen">
  .col {
    background-color: #fff;
    box-shadow: 2px 2px 8px #888888;
    border-radius: 5px;
  }
  #buttonFloat {
    float: right;
    position: absolute;
    top: -15;
    right: -15;
    box-shadow: 2px 2px 8px #888888;
    border-radius: 100%;
    width: 35px;
    height: 35px;
  }
  /*.btn-success {
    float: right;
  }*/
  #hidingWell2 {
    overflow: visible;
    position: absolute;
    z-index: 10000;
    box-shadow: 8px 12px 25px #888888;
  }
  #hidingWell3 {
    overflow: visible;
    position: absolute;
    z-index: 10000;
    box-shadow: 8px 12px 25px #888888;
  }
  .fas {
    color: #a0cc3a;
  }
  .btn-success {
    box-shadow: 2px 2px 8px #888888;
  }
  .btn-success:hover {
    box-shadow: 6px 6px 12px #888888;
  }
</style>
    <!-- <div > -->

            <!-- <nav id="emptydiv" class="navbar navbar-default navbar-fixed-top navigation-clean-button">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="lakasok.php"><img src="assets/img/vlogo.jpg" alt="brand"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li role="presentation"><a href="lakasok.php"><i class="fas fa fa-building"></i> Lakások </a></li>
                        <li role="presentation"><a href="partnerek.php"><i class="fas fa fa-users"></i> Partnerek </a></li>
                        <li role="presentation"><a href="tranzakciok.php"><i class="fas fa fa-tasks"></i> Tranzakciók </a></li>
                        <li role="presentation"><a href="tranz.php"><i class="fas fa fa-tasks"></i> Áttekintés </a></li>
                        <li role="presentation"><a href="ertesitesek.php"><i class="fas fa fa-comments" aria-hidden="true"></i> Éresítések </a></li>
                    </ul>
                    <p class="navbar-text navbar-right actions"><a class="btn glyphicon glyphicon-cog" href="beallitasok.php"></a>
                      <a class="btn btn-default action-button" role="button" onclick="kijelentjezes()">Kijelentkezés </a></p>
                      <p></p>
                </div>
            </div>
        </nav> -->

    <!-- </div> -->
    <!-- <nav class="navbar navbar-default navigation-clean-button">
    </nav> -->
    <p></p>
    <style media="screen">
    .well {
      box-shadow: 2px 2px 8px #888888;
    }
    </style>
   <style media="screen">
   .form-control {
     box-shadow: 2px 2px 8px #888888;
   }
   .form-control:hover {
     box-shadow: 4px 4px 12px #888888;
   }
   </style>
