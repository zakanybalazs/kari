<?php
require_once '../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
session_start();
?>
<html>
<head>
  <meta charset="utf-16">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Viapan karácsony</title>
  <link rel="stylesheet" href="../assets/css/Navigation-with-Button1.css">
  <link rel="stylesheet" href="../assets/css/Simple-Vertical-Navigation-Menu.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/pnotify.custom.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script src="../assets/js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
<script src="../assets/js/pnotify.custom.js" charset="utf-8"></script>
<script src="../assets/js/datatables.js" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/alasql/0.3/alasql.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<body style="background-color:rgb(250,250,250);" class="fuelux">
  <script type="text/javascript">
  function scrolling() {
    $.scrollTo('#ertekeles', 2000);
  }
  </script>
<style media="screen">
    html {
      background: url(../assets/img/program-background.svg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    body {
      background: url(../assets/img/program-background.svg) no-repeat center center fixed;
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
  .btn-default {
    height: 50px;
  }
  .btn-success {
    height: 50px;
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
  .well {
    box-shadow: 2px 2px 8px #888888;
  }
  .form-control {
    box-shadow: 2px 2px 8px #888888;
  }
  .form-control:hover {
    box-shadow: 4px 4px 12px #888888;
  }
  .btn-circle {
  display:block;
  height: 150px;
  width: 150px;
  border-radius: 50%;

  }
  .btn-circle:hover {
    box-shadow: 4px 4px 12px #888888;
  }
  @media (max-width: 765px) {
    .btn-circle {
    display:block;
    height: 80px;
    width: 80px;
    border-radius: 50%;
    /* font-size: 14px; */
  }
  .btn-circle:hover {
    box-shadow: 4px 4px 12px #888888;
  }
  }
</style>
  <body>
    <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button  type="button" class="btn-circle btn-inline-default" onclick="goTo('index.php')" name="button">Florence</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button type="button" class="btn-circle btn-default" onclick="goTo('belbin.php')" name="button">Belbin</button>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button type="button" class="btn-circle btn-default" onclick="goTo('diszk.php')" name="button">DiSzK</button>
      </div>
    </div>
      <div class="container well">
      <script type="text/javascript">
        function goTo(to) {
          var nev = $('#nev').val();
          var nev = encodeURI(nev);
          window.location.href=to+"?nev="+nev;
        }
      </script>
      <h3 align="center">Személyiségteszt</h1>

      <p></p>
      <h3>Útmutató:</h3>
      <p>A blokkok mindegyikében 4 szó található egymás alatt. Jelöld meg azt, amelyiket a legjellemzőbbnek érzed saját magadra! Így haladj végig mind a 40 blokkon, majd nyomd meg az eredmény megtekintése gombot.</p>
      <div class="row">
        <div class="col-lg-3">
          <script src="../chosen/chosen.jquery.js" charset="utf-8"></script>
          <link rel="stylesheet" href="../chosen/chosen.css">
          <label>Kitöltő neve</label>
          <input type="text" id="nev" placeholder="Név megadása:" class="form-control">
          <p></p>
          <label>E-mail</label>
          <input type="email" id="email" class="form-control" placeholder="myvaiapan@viapangroup.com">
      <script type="text/javascript">
        $(".chosen-select").chosen({width:"100%"});
        $('.chosen-select').val('Válassz');
        $(".chosen-select").trigger("chosen:updated");
      </script>

        </div>
        <div class="col-lg-3">
        </div>
      </div>
      <h2 align="center">Erősségek</h2>
      <div class="row">
        <div class="col-lg-3">
          <h3>1. blokk</h3>
            <div class="btn-group">
            <input type="text" id="a-1" value="" hidden="hidden">
            <button class="btn btn-default form-control" value="b">kalandvágyó</button>
            <button class="btn btn-default form-control" value="d">alkalmazkodó</button>
            <button class="btn btn-default form-control" value="a">eleven</button>
            <button class="btn btn-default form-control" value="c">elemző</button>
          </div>
        </div>
        <div class="col-lg-3">
          <h3>2. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-2" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="c">kitartó</button>
            <button class="btn btn-default form-control" value="a">játékos</button>
            <button class="btn btn-default form-control" value="b">meggyőző</button>
            <button class="btn btn-default form-control" value="d">békés</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>3. blokk</h3>
          <div class="btn-group">

            <input type="text" id="a-3" value="" hidden="hidden">
            <button class="btn btn-default form-control" value="d">behódoló</button>
            <button class="btn btn-default form-control" value="c">önfeláldozó</button>
            <button class="btn btn-default form-control" value="a">társas lény</button>
            <button class="btn btn-default form-control" value="b">erős akaratú</button>
        </div>
        </div>
        <div class="col-lg-3">
          <h3>4. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-4" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="d">előzékeny</button>
            <button class="btn btn-default form-control" value="c">megfontolt</button>
            <button class="btn btn-default form-control" value="b">versengő</button>
            <button class="btn btn-default form-control" value="a">megnyerő</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>5. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-5" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="a">üdítő</button>
            <button class="btn btn-default form-control" value="c">tiszteletteljes</button>
            <button class="btn btn-default form-control" value="d">visszafogott</button>
            <button class="btn btn-default form-control" value="b">talpraesett</button>


        </div>
        </div>
        <div class="col-lg-3">
          <h3>6. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-6" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="d">belenyugvó</button>
            <button class="btn btn-default form-control" value="c">érzékeny</button>
            <button class="btn btn-default form-control" value="b">magabízó</button>
            <button class="btn btn-default form-control" value="a">tüzes</button>


        </div>
        </div>
        <div class="col-lg-3">
          <h3>7. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-7" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="c">tervező</button>
            <button class="btn btn-default form-control" value="d">türelmes</button>
            <button class="btn btn-default form-control" value="b">határozott</button>
            <button class="btn btn-default form-control" value="a">előmozdító</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>8. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-8" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="b">magabiztos</button>
            <button class="btn btn-default form-control" value="a">keresetlen</button>
            <button class="btn btn-default form-control" value="c">menetrendszerű</button>
            <button class="btn btn-default form-control" value="d">tartózkodó</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>9. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-9" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="c">rendszerető</button>
            <button class="btn btn-default form-control" value="d">készséges</button>
            <button class="btn btn-default form-control" value="b">szókimondó</button>
            <button class="btn btn-default form-control" value="a">derülátó</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>10. blokk</h3>

          <div class="btn-group">

          <input type="text" id="a-10" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="d">barátságos</button>
            <button class="btn btn-default form-control" value="c">hűséges</button>
            <button class="btn btn-default form-control" value="a">mókás</button>
            <button class="btn btn-default form-control" value="b">erélyes</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>11. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-11" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="b">merész</button>
            <button class="btn btn-default form-control" value="a">elragadó</button>
            <button class="btn btn-default form-control" value="c">diplomatikus</button>
            <button class="btn btn-default form-control" value="d">precíz</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>12. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-12" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="a">vidám</button>
            <button class="btn btn-default form-control" value="d">állhatatos</button>
            <button class="btn btn-default form-control" value="c">kulturált</button>
            <button class="btn btn-default form-control" value="b">öntudatos</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>13. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-13" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="c">idealista</button>
            <button class="btn btn-default form-control" value="b">független</button>
            <button class="btn btn-default form-control" value="d">semleges</button>
            <button class="btn btn-default form-control" value="a">ösztönző</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>14. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-14" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="a">közlékeny</button>
            <button class="btn btn-default form-control" value="b">döntésképes</button>
            <button class="btn btn-default form-control" value="d">fanyar</button>
            <button class="btn btn-default form-control" value="c">elmélyült</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>15. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-15" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="d">békítő</button>
            <button class="btn btn-default form-control" value="c">muzikális</button>
            <button class="btn btn-default form-control" value="b">aktív</button>
            <button class="btn btn-default form-control" value="a">társaságkedvelő</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>16. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-16" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="c">figyelmes</button>
            <button class="btn btn-default form-control" value="b">fáradhatatlan</button>
            <button class="btn btn-default form-control" value="a">beszédes</button>
            <button class="btn btn-default form-control" value="d">megértő</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>17. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-17" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="d">jó hallgatóság</button>
            <button class="btn btn-default form-control" value="c">lojális</button>
            <button class="btn btn-default form-control" value="b">vezető egyéniség</button>
            <button class="btn btn-default form-control" value="a">friss</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>18. blokk</h3>

          <div class="btn-group">

          <input type="text" id="a-18" value="" hidden="hidden">

            <button class="btn btn-default form-control" value="d">megelégedett</button>
            <button class="btn btn-default form-control" value="b">főnökösködő</button>
            <button class="btn btn-default form-control" value="c">listaíró</button>
            <button class="btn btn-default form-control" value="a">helyes</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>19. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-19" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="d">perfekcionista</button>
            <button class="btn btn-default form-control" value="b">kellemes</button>
            <button class="btn btn-default form-control" value="c">eredményes</button>
            <button class="btn btn-default form-control" value="a">népszerű</button>

        </div>
        </div>
        <div class="col-lg-3">
          <h3>20. blokk</h3>
          <div class="btn-group">

          <input type="text" id="a-20" value="" hidden="hidden">


            <button class="btn btn-default form-control" value="a">életvidám</button>
            <button class="btn btn-default form-control" value="d">vakmerő</button>
            <button class="btn btn-default form-control" value="c">illemtudó</button>
            <button class="btn btn-default form-control" value="b">kiegyensúlyozott</button>

          <p></p>
        </div>
        </div>

        <h2 align="center">Gyengeségek</h2>

        <div class="row">
          <div class="col-lg-3">
            <h3>21. blokk</h3>

            <div class="btn-group">

            <input type="text" id="a-21" value="" hidden="hidden">


              <button class="btn btn-default form-control" value="d">fapofa</button>
              <button class="btn btn-default form-control" value="c">szégyenlős</button>
              <button class="btn btn-default form-control" value="a">magamutogató</button>
              <button class="btn btn-default form-control" value="b">parancsolgató</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>22. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-22" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="a">fegyelmezetlen</button>
              <button class="btn btn-default form-control" value="b">érzéketlen</button>
              <button class="btn btn-default form-control" value="d">fanyalgó</button>
              <button class="btn btn-default form-control" value="c">haragtartó</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>23. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-23" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="d">zárkózott</button>
              <button class="btn btn-default form-control" value="c">sértődékeny</button>
              <button class="btn btn-default form-control" value="b">ellenálló</button>
              <button class="btn btn-default form-control" value="a">önismétlő</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>24. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-24" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="c">szőrszálhasogató</button>
              <button class="btn btn-default form-control" value="d">félős</button>
              <button class="btn btn-default form-control" value="a">feledékeny</button>
              <button class="btn btn-default form-control" value="b">kíméletlenül őszinte</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>25. blokk</h3>

            <div class="btn-group">

            <input type="text" id="a-25" value="" hidden="hidden">


              <button class="btn btn-default form-control" value="d">türelmetlen</button>
              <button class="btn btn-default form-control" value="c">bizonytalan</button>
              <button class="btn btn-default form-control" value="b">határozatlan</button>
              <button class="btn btn-default form-control" value="a">közbeszóló</button>


          </div>
          </div>
          <div class="col-lg-3">
            <h3>26. blokk</h3>

            <div class="btn-group">

            <input type="text" id="a-26" value="" hidden="hidden">


              <button class="btn btn-default form-control" value="d">népszerűtlen</button>
              <button class="btn btn-default form-control" value="c">érdektelen</button>
              <button class="btn btn-default form-control" value="a">kiszámíthatatlan</button>
              <button class="btn btn-default form-control" value="b">szeretetlen</button>


          </div>
          </div>
          <div class="col-lg-3">
            <h3>27. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-27" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="c">csökönyös</button>
              <button class="btn btn-default form-control" value="d">rendszertelen</button>
              <button class="btn btn-default form-control" value="b">kielégíthetetlen</button>
              <button class="btn btn-default form-control" value="a">habozó</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>28. blokk</h3>

            <div class="btn-group">

            <input type="text" id="a-28" value="" hidden="hidden">


              <button class="btn btn-default form-control" value="d">szürke</button>
              <button class="btn btn-default form-control" value="c">borúlátó</button>
              <button class="btn btn-default form-control" value="b">öntelt</button>
              <button class="btn btn-default form-control" value="a">engedékeny</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>29. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-29" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="a">lobbanékony</button>
              <button class="btn btn-default form-control" value="d">céltalan</button>
              <button class="btn btn-default form-control" value="b">vitatkozó</button>
              <button class="btn btn-default form-control" value="c">távolságtartó</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>30. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-30" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="a">naiv</button>
              <button class="btn btn-default form-control" value="c">elutasító</button>
              <button class="btn btn-default form-control" value="b">izgága</button>
              <button class="btn btn-default form-control" value="d">nemtörődöm</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>31. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-31" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="d">aggodalmaskodó</button>
              <button class="btn btn-default form-control" value="c">visszahúzódó</button>
              <button class="btn btn-default form-control" value="b">munkamániás</button>
              <button class="btn btn-default form-control" value="a">népszerűség-hajhászó</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>32. blokk</h3>

            <div class="btn-group">

            <input type="text" id="a-32" value="" hidden="hidden">


              <button class="btn btn-default form-control" value="c">túlérzékeny</button>
              <button class="btn btn-default form-control" value="b">tapintatlan</button>
              <button class="btn btn-default form-control" value="d">félénk</button>
              <button class="btn btn-default form-control" value="a">fecsegő</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>33. blokk</h3>

            <div class="btn-group">

            <input type="text" id="a-33" value="" hidden="hidden">


              <button class="btn btn-default form-control" value="d">kétkedő</button>
              <button class="btn btn-default form-control" value="a">szétszórt</button>
              <button class="btn btn-default form-control" value="b">hatalmaskodó</button>
              <button class="btn btn-default form-control" value="c">levert</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>34. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-34" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="a">következetlen</button>
              <button class="btn btn-default form-control" value="c">befelé forduló</button>
              <button class="btn btn-default form-control" value="b">intoleráns</button>
              <button class="btn btn-default form-control" value="d">közönyös</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>35. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-35" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="a">rendetlen</button>
              <button class="btn btn-default form-control" value="c">szeszélyes</button>
              <button class="btn btn-default form-control" value="d">motyogó</button>
              <button class="btn btn-default form-control" value="b">manipulatív</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>36. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-36" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="d">lassú</button>
              <button class="btn btn-default form-control" value="b">makacs</button>
              <button class="btn btn-default form-control" value="a">feltűnősködő</button>
              <button class="btn btn-default form-control" value="c">hitetlenkedő</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>37. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-37" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="d">magának való</button>
              <button class="btn btn-default form-control" value="c">rátarti</button>
              <button class="btn btn-default form-control" value="b">lusta</button>
              <button class="btn btn-default form-control" value="a">hangoskodó</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>38. blokk</h3>

            <div class="btn-group">

            <input type="text" id="a-38" value="" hidden="hidden">


              <button class="btn btn-default form-control" value="d">tunya</button>
              <button class="btn btn-default form-control" value="c">gyanakvó</button>
              <button class="btn btn-default form-control" value="b">indulatos</button>
              <button class="btn btn-default form-control" value="a">szórakozott</button>

          </div>
          </div>
          <div class="col-lg-3 ">
            <h3>39. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-39" value="" hidden="hidden">



              <button class="btn btn-default form-control" value="c">bosszúálló</button>
              <button class="btn btn-default form-control" value="a">nyughatatlan</button>
              <button class="btn btn-default form-control" value="d">húzódozó</button>
              <button class="btn btn-default form-control" value="b">kapkodó</button>

          </div>
          </div>
          <div class="col-lg-3">
            <h3>40. blokk</h3>
            <div class="btn-group">

            <input type="text" id="a-40" value="" hidden="hidden">
              <button class="btn btn-default form-control" value="d">megalkuvó</button>
              <button class="btn btn-default form-control" value="c">gáncsoskodó</button>
              <button class="btn btn-default form-control" value="b">körmönfont</button>
              <button class="btn btn-default form-control" value="a">állhatatlan</button>

            <p></p>
          </div>
          </div>
          <div class="col-lg-12">
            <p></p>
          </div>
        <section id="ertekeles">
          <div class="container well" id="hidingWell" hidden="hidden">
            <h2 align="center">A Te személyiségtípusodra jellemző tulajdonságok:</h2>
            <div id="eredmeny_a" hidden="hidden">
              <h3>Kolerikus (lobbanékony)</h3>
              <div class="col-lg-6 col-md-6">
                <h4>Erősségek:</h4>
                <p>Célratörő és magabiztos</p>
                <p>Elfogadja a kihívásokat</p>
                <p>Versengő</p>
                <p>Eredményközpontú</p>
                <p>Nem fél szembehelyezkedni</p>
              </div>
              <div class="col-lg-6 col-md-6">
                <h4>Gyengeségek:</h4>
                <p>Kérkedő</p>
                <p>Önkényeskedő</p>
                <p>Nyers</p>
                <p>Szeret vitatkozni</p>
                <p>Nem figyel mások szavaira</p>
              </div>
            </div>
            <div id="eredmeny_b" hidden="hidden">
              <h3>Szangvinikus (indulatos)</h3>
              <div class="col-lg-6 col-md-6">
                <h4>Erősségek:</h4>
                <p>Társas lény</p>
                <p>Lelkesedő</p>
                <p>Meggyőző</p>
                <p>Beszédes</p>
                <p>Derűlátó</p>
                <p>Szórakoztató</p>
              </div>
              <div class="col-lg-6 col-md-6">
                <h4>Gyengeségek:</h4>
                <p>Az önelfogadás érdekében kerüli a szembehelyezkedést</p>
                <p>Túloz</p>
                <p>Hurráoptimizmusra hajlamos</p>
                <p>Túl sokat fecseg</p>
                <p>Nehezen összpontosít</p>
              </div>
            </div>
            <div id="eredmeny_c" hidden="hidden">
              <h3>Flegmatikus (közönyös, egykedvű)</h3>
              <div class="col-lg-6 col-md-6">
                <h4>Erősségek:</h4>
                <p>Figyelmesen hallgat</p>
                <p>Következetes</p>
                <p>Ragaszkodó, támogató</p>
                <p>Türelmes</p>
                <p>Kitartó</p>
              </div>
              <div class="col-lg-6 col-md-6">
                <h4>Gyengeségek:</h4>
                <p>Rendkívül érzékeny</p>
                <p>Passzív</p>
                <p>Határozatlan</p>
                <p>Ellenáll a változásoknak</p>
                <p>Túlontúl elnéző</p>
              </div>
            </div>
            <div id="eredmeny_d" hidden="hidden">
              <h3>Melankolikus (levert, bús, lehangolt)</h3>
              <div class="col-lg-6 col-md-6">
                <h4>Erősségek:</h4>
                <p>Kritikus gondolkodó</p>
                <p>Úgyel a részletekre</p>
                <p>Körültekintő</p>
                <p>Gondos, pontos</p>
                <p>Problémamegoldó</p>
              </div>
              <div class="col-lg-6 col-md-6">
                <h4>Gyengeségek:</h4>
                <p>Perfekcionista</p>
                <p>Túlontúl kritikus</p>
                <p>Szélsőségekben gondolkodik</p>
                <p>Nehezen változik</p>
                <p>Zárkózott, tartózkodó</p>
              </div>
            </div>
          </div>
        </section>
          <h3 align="center">
            <button type="button" onclick="kieertekel()" class="btn btn-success">Eredmény megtekintése</button>
          </h3>
      <script type="text/javascript">
          $('.col-lg-3').attr("class", "col-lg-3 col-md-6 col-sm-6");

            function kieertekel() {
              var nev = $('#nev').val();
              var email = $('#email').val();
              if (nev == '' || email == '') {
                new PNotify({
                    title: 'Hiba',
                    text: 'Ajjajjj nem töltötted ki az adatokat!',
                    animate: { animate: true, in_class: 'bounceInLeft',
                    out_class: 'bounceOutRight',},
                    type: "error",
                    hide: true,
                  });
                  return;
              }
                var arr = new Array;
                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;

                arr[0] = nev;
                for (var i = 1; i <= 40; i++) {
                  var val = $('#a-' + i).val();
                  arr[i-1] = val;
                  switch (val) {
                    case 'a':
                    a++;
                    break;
                    case 'b':
                    b++;
                    break;
                    case 'c':
                    c++;
                    break;
                    case 'd':
                    d++;
                    break;
                    default:
                    new PNotify({
                        title: 'Hiba',
                        text: 'Ajjajjj nem töltötted ki az adatokat!',
                        animate: { animate: true, in_class: 'bounceInLeft',
                        out_class: 'bounceOutRight',},
                        type: "error",
                        hide: true,
                      });
                      return;

                  }
                }
                arr[41] = {'a':a, 'b':b, 'c':c, 'd':d};
                $.post("../ajax/ajax.teszt.php", {
                  nev: nev,
                  email: email,
                  tipus: "Florence",
                  adatok: arr,
                },
                "json").done(function( response ) {
                  console.log("saving: " + response);
                });
                var maxOfAns = Math.max(a,b,c,d);
                switch (maxOfAns) {
                  case a:
                  $('#eredmeny_a').removeAttr('hidden');
                  break;
                  case b:
                  $('#eredmeny_b').removeAttr('hidden');
                  break;
                  case c:
                  $('#eredmeny_c').removeAttr('hidden');
                  break;
                  case d:
                  $('#eredmeny_d').removeAttr('hidden');
                  break;
                  default:

                }
                scrolling();
                setTimeout(function(){ $('#hidingWell').slideDown(2000); }, 1000);

            }
        </script>
          <div class="col-lg-3">
          </div>
        </div>
        <p></p>
<script type="text/javascript">
$('.btn-group').find('button').click(function() {
    var vals = $(this).val();
    var div = $(this).parent('div');
      div.find('button').each(function() {
        $(this).attr('class','btn btn-default form-control');
      });
    $(this).attr('class','btn btn-success form-control disabled');
    $(this).parent('div').find('input').val(vals);
});
</script>
      </div>
    </body>
    </html>
