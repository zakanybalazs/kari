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
<!-- <script src="../assets/js/scrollTo.min.js" charset="utf-8"></script> -->
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<body style="background-color:rgb(250,250,250);" class="fuelux">

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
    color: #fff;
  }
  .btn-success {
    box-shadow: 2px 2px 8px #888888;
  }
  .btn-danger {
    box-shadow: 2px 2px 8px #888888;
  }
  .btn-success:hover {
    box-shadow: 6px 6px 12px #888888;
  }
  .btn-danger:hover {
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

  }
  .btn-circle:hover {
    box-shadow: 4px 4px 12px #888888;
  }
  }
  .formcontrol {
    display: block;
    width: 60%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555555;
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #cccccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  }
  .formcontrol:focus {
    border-color: #a0cc3a;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(160, 204, 58, 0.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(160, 204, 58, 0.6);
  }
  .form-control::-moz-placeholder {
    color: #fff;
    opacity: 1;
  }
  .form-control:-ms-input-placeholder {
    color: #ff;
  }
  .form-control::-webkit-input-placeholder {
    color: #fff;
  }
  .formcontrol::-ms-expand {
    border: 0;
    background-color: transparent;
  }
  .formcontrol[disabled],
  .formcontrol[readonly],
  fieldset[disabled] .formcontrol {
    background-color: #eeeeee;
    opacity: 1;
  }
</style>
  <body>
    <div class="container">

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button  type="button" class="btn-circle btn-default" onclick="goTo('index.php')" name="button">Florence</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button type="button" class="btn-circle btn-inline-default" onclick="goTo('belbin.php')" name="button">Belbin</button>
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
      <p class="fas">..</p>
      <h3 align="center">Csapattag típus kérdőív</h1>
        <section id="ertekeles">
          <div class="container well" id="hidingWell" hidden="hidden">
              <h1 align='center'>Értékelésed</h1>
              <h3>A válaszaid alapján, a következő csoportba tartozol:</h3>
              <div id="VÁ" hidden="hidden">
                <h3>Vállalatépítő</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Szervez, az ötleteket és terveket gyakorlati lépésekké alakítja</p>
                <h4>JELLEMZŐI</h4>
                <p>Konzervatív, kötelességtudó, kiszámítható, fegyelmezett, megbízható</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>Jó szervező, gyakorlatias gondolkodású, kemény munkához szokott, fegyelmezett</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>Rugalmatlan, lassan reagál az új lehetőségekre</p>
              </div>
              <div id="EL" hidden="hidden">
                <h3>Elnök</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Célokat és prioritásokat jelöl ki, motiválja a munkatársakat, segíti a döntéshozatalt</p>
                <h4>JELLEMZŐI</h4>
                <p>Érett, magabiztos, bizakodó, kellő önuralommal rendelkezik</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>Képes mindenkit előítéletek nélkül és pusztán érdemei alapján értékelni, célorientált</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>Átlagosan kreatív és intelligens</p>
              </div>
              <div id="SE" hidden="hidden">
                <h3>Serkentő</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Vitat, nyomást gyakorol, megtalálja az akadályok megkerülésének útját</p>
                <h4>JELLEMZŐI</h4>
                <p>Ideges, aktív, dinamikus, érzelmeit kimutató, magas fordulatszámon él</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>Küzd a cselekvés-képtelenség, a hatékonyság hiánya, az önelégültség, az önáltatás ellen</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>Hajlamos a provokációra, ingerültségre, türelmetlenségre, és erőszakra</p>
              </div>
              <div id="ÖGY" hidden="hidden">
                <h3>Ötletgyártó</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Eredeti ötleteket gondol ki, nehéz problémákat old meg</p>
                <h4>JELLEMZŐI</h4>
                <p>Individualista, okos, komoly gondolkodású, új utakat keres, liberális</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>A szellem embere, képzeletgazdag, nagy tudású, kiváló értelmi képességekkel rendelkezik</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>A fellegekben jár, nem törődik a részletekkel és a formaságokkal, nem jól kommunikál</p>
              </div>
              <div id="FO" hidden="hidden">
                <h3>Forrásfeltáró</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Új lehetőségeket aknáz ki, kapcsolatot épít, tárgyal</p>
                <h4>JELLEMZŐI</h4>
                <p>Extrovertált, lelkes, kíváncsi, kommunikatív, törekvő</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>Jó kapcsolattartó, jól értesült, meg tud felelni a kihívásoknak</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>A kezdeti lelkesedés lankadásával elveszíti érdeklődését</p>
              </div>
              <div id="HE" hidden="hidden">
                <h3>Helyzetértékelő</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Minden eshetőséget átlát, elemez, pontosan felméri a lehetséges eredményeket</p>
                <h4>JELLEMZŐI</h4>
                <p>Megfontolt, érzelmek nélkül, józanul ítél, intelligens, száraz</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>Jó ítélőképességgel rendelkezik, előrelátó, gyakorlatias</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>Alulmotivált, másokat sem inspirál</p>
              </div>
              <div id="CS" hidden="hidden">
                <h3>Csapatjátékos</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Figyel, kerüli a súrlódást, képes kezelni a nehéz embereket</p>
                <h4>JELLEMZŐI</h4>
                <p>Társas hajlamú, jóindulatú, érzékeny, szelíd, szolgálatkész</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>Jól reagál különféle személyiségekre és szituációkra, erősíti a csapatszellemet</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>Kemény helyzetekben döntésképtelen, határozatlan</p>
              </div>
              <div id="ME" hidden="hidden">
                <h3>Megvalósító</h3>
                <h4>SZEREPE A TEAMBEN</h4>
                <p>Felfedezi a hibákat, tévedéseket, a feladatra koncentrál, betartja a határidőket és célokat</p>
                <h4>JELLEMZŐI</h4>
                <p>Lelkiismeretes, aggódó, precíz, rendszerető</p>
                <h4>ELŐNYÖS TULAJDONSÁGAI</h4>
                <p>Tökéletességre törekszik, nem hagy semmit befejezetlenül</p>
                <h4>MEGENGEDHETŐ GYENGESÉGEK</h4>
                <p>Hajlamos az ok nélküli aggodalomra, általában nem delegálja a feladatokat</p>
              </div>
          </div>
        </section>
      <p class="fas">..</p>
      <h3>Útmutató:</h3>
      <script type="text/javascript">
      function scrolling() {
        $.scrollTo('#ertekeles', 2000);
      }
      </script>
      <p>Minden állítássorozat esetén összesen tíz pontot ossz szét az "a" és "h" lehetőségek között aszerint, hogy melyik mondat mennyire találóan írja le a viselkedésedet. A pontokat bármilyen arányban eloszthatod: akár az összes válasz mellé írhatsz pontokat, de közülük egyre is adhatsz tíz pontot. A kitöltést követően nyomjd meg a beküldés gombot.</p>
      <div class ="row">
        <div class="col-lg-3">
          <script src="../chosen/chosen.jquery.js" charset="utf-8"></script>
          <link rel="stylesheet" href="../chosen/chosen.css">
          <label>Kitöltő neve</label>
          <select class="chosen-select" id="nev">
            <option disabled>Válassz</option>
            <?php
            if(!empty($_GET['nev'])) {
              $nev = $_GET['nev'];
              echo "<option selected>$nev</option>";
            }
            $q = "SELECT * FROM nevek";
            $sq = mysqli_query($server, $q);
            while ($sqa = mysqli_fetch_assoc($sq)) {?>
              <option><?php echo $sqa['nevek'] ?></option>
            <?php } ?>
        </div>
      </select>
      <script type="text/javascript">
        $(".chosen-select").chosen({width:"100%"});
        $('.chosen-select').val('Válassz');
        $(".chosen-select").trigger("chosen:updated");

      </script>
      <div class="col-lg-3">
        </div>
      </div>

      <!-- A SEKCIO KEZDETE -->
<div class="container col-lg-12">

      <h3 align="center">I.	Azzal veszem ki a részem a csapatmunkában, hogy:</h3>
        <h1 id="a_count">0/10</h1>
        <div id="a_div">
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">a)	Gyorsan észreveszem és megragadom a kínálkozó lehetőségeket.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="a_1" type='number' min='0' max='10' class="form-control" value=0 placeholder='FO'></div>
          <p></p>
       </div><p></p>
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">b)	Szinte bárkivel együtt tudok dolgozni.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="a_2" type='number' min='0' max='10' class="form-control" value=0 placeholder="CS"></div>
          <p></p>
       </div>
       <p></p>
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">c)	Sosem fogyok ki az ötletekből.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="a_3" type='number' min='0' max='10' class="form-control" value=0 placeholder="ÖGY"></div>
          <p></p>
       </div>
       <p></p>
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">d)	Kihozom a többiekből, amit a csapatért tenni tudnak.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="a_4" type='number' min='0' max='10' class="form-control" value=0 placeholder="EL"></div>
          <p></p>
       </div>
       <p></p>
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">e)	Mindent végig csinálok, amit elkezdtem.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="a_5" type='number' min='0' max='10' class="form-control" value=0 placeholder="ME"></div>
          <p></p>
       </div>
       <p></p>
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">f)	Ha a várható végeredmény indokolja, kész vagyok átmenetileg népszerűtlenné válni.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="a_6" type='number' min='0' max='10' class="form-control" value=0 placeholder="SE"></div>
          <p></p>
       </div>
       <p></p>
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">g)	Ismerős helyzetekben gyorsan meg tudom ítélni, mely lépések lennének célravezetők.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="a_7" type='number' min='0' max='10' class="form-control" value=0 placeholder="VÁ"></div>
          <p></p>
       </div>
       <p></p>
       <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <p align='center' type="button" name="button">h)	Előítélet és elfogultság nélkül teszek alternatív javaslatokat, amelyeket indokolni is tudok.</p></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="a_8" type='number' min='0' max='10' class="form-control" value=0 placeholder="HE">
          </div>
          <p></p>
       </div>
     </div>
     <script type="text/javascript">
         $('#a_div').find('input').change(function() {
           var count = 0;
             for (var i = 1; i <= 8; i++) {
               var tempVal = $('#a_'+i).val();
               count = count + Number(tempVal);
             }
             if (count > 10) {
               var value = $(this).val();
               $(this).val(value - (count - 10));
               var count = count - (count - 10);
             }
             if (count >= 10) {
               for (var i = 1; i <= 8; i++) {
                 var tempVal = $('#a_'+i).val();
                 if (Number(tempVal) == '' || Number(tempVal) == 0) {
                   $('#a_'+i).attr('disabled','disabled');
                 } else {
                   var maxVal = $('#a_'+i).val();
                   $('#a_'+i).attr('max',maxVal);
                 }
               }
             } else {
               for (var i = 1; i <= 8; i++) {
                   $('#a_'+i).removeAttr('disabled');
                   var maxX = 10 - count;
                   var maxVal = $('#a_'+i).val();
                   $('#a_'+i).attr('max',maxVal + maxX);
               }

             }
             $('#a_count').html("");
              $('#a_count').html(count+'/10');
         });
     </script>

     <!-- B SEKCIO KEZDETE -->

     <h1 class="fas">..</h1>
     <h3 align="center">II.	A csapatmunkában talán hátrányos, hogy:</h3>
       <h1 id="b_count">0/10</h1>
       <div id="b_div">
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">a)	Kényelmetlenül érzem magam egy megbeszélésen, ha az nincs megfelelő módon előkészítve és irányítva.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="b_1" type='number' min='0' max='10' class="form-control" value=0 placeholder="VÁ"></div>
         <p></p>
      </div><p></p>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">b)	Túlságosan támogatom azokat a javaslatokat, amelyeknek a csoport nem szentel kellő figyelmet.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="b_2" type='number' min='0' max='10' class="form-control" value=0 placeholder="EL"></div>
         <p></p>
      </div>
      <p></p>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">c)	Ha új ötletekkel lehet előhozakodni, többet beszélek a kelleténél.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="b_3" type='number' min='0' max='10' class="form-control" value=0 placeholder="FO"></div>
         <p></p>
      </div>
      <p></p>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">d)	Túlságosan tárgyilagosan gondolkodom ahhoz, hogy lelkesedjek a közös célért.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="b_4" type='number' min='0' max='10' class="form-control" value=0 placeholder="HE"></div>
         <p></p>
      </div>
      <p></p>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">e)	Erőszakosnak és önkényesnek látszom, amikor megpróbálom elérni, hogy valamilyen problémát megoldjunk.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="b_5" type='number' min='0' max='10' class="form-control" value=0 placeholder="SE"></div>
         <p></p>
      </div>
      <p></p>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">f)	Nem tudok vezéregyéniség módjára viselkedni, aminek talán az az oka, hogy túlságosan is figyelembe veszem a többiek véleményét.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="b_6" type='number' min='0' max='10' class="form-control" value=0 placeholder="CS"></div>
         <p></p>
      </div>
      <p></p>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">g)	Ha valami új jut az eszembe, hosszasan elmerengek rajta, és elmulasztom, ami közben történik.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="b_7" type='number' min='0' max='10' class="form-control" value=0 placeholder="ÖGY"></div>
         <p></p>
      </div>
      <p></p>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
         <p align='center' type="button" name="button">h)	Munkatársaim szerint túl sokat aggódom feleslegesen a részletek és a várható nehézségek miatt.</p></div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="b_8" type='number' min='0' max='10' class="form-control" value=0 placeholder="ME"></div>
         <p></p>
      </div>
      <p></p>
    </div>
    <script type="text/javascript">
        $('#b_div').find('input').change(function() {
          var count = 0;
            for (var i = 1; i <= 8; i++) {
              var tempVal = $('#b_'+i).val();
              count = count + Number(tempVal);
            }
            if (count > 10) {
              var value = $(this).val();
              $(this).val(value - (count - 10));
              var count = count - (count - 10);
            }
            if (count >= 10) {
              for (var i = 1; i <= 8; i++) {
                var tempVal = $('#b_'+i).val();
                if (Number(tempVal) == '' || Number(tempVal) == 0) {
                  $('#b_'+i).attr('disabled','disabled');
                } else {
                  var maxVal = $('#b_'+i).val();
                  $('#b_'+i).attr('max',maxVal);
                }
              }
            } else {
              for (var i = 1; i <= 8; i++) {
                  $('#b_'+i).removeAttr('disabled');
                  var maxX = 10 - count;
                  var maxVal = $('#b_'+i).val();
                  $('#b_'+i).attr('max',maxVal + maxX);
              }

            }
            $('#b_count').html("");
             $('#b_count').html(count+'/10');
        });
    </script>

    <!-- C SZEKCIO KEZDETE -->

    <h1 class="fas">..</h1>
    <h3 align="center">III.	Ha másokkal közös projekten dolgozom,</h3>
      <h1 id="c_count">0/10</h1>
      <div id="c_div">
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">a)	Anélkül tudom befolyásolni őket, hogy ezt nyomasztónak éreznék.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="c_1" type='number' min='0' max='10' class="form-control" value=0 placeholder="EL"></div>
        <p></p>
     </div><p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">b)	Állandóan figyelek, nehogy gondatlanságból hibát kövessünk el, vagy kihagyjunk valamit.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="c_2" type='number' min='0' max='10' class="form-control" value=0 placeholder="ME"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">c)	Cselekvésre ösztönzöm őket, ha azt tapasztalom, hogy csak az időt vesztegetjük, és nem teszünk lépéseket célunk megvalósítására.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="c_3" type='number' min='0' max='10' class="form-control" value=0 placeholder="SE"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">d)	Lehet számítani rá, hogy eredeti ötletekkel fogok előállni.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="c_4" type='number' min='0' max='10' class="form-control" value=0 placeholder="ÖGY"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">e)	Ha a csapat érdeke megkívánja, mindig támogatom az értelmes javaslatokat.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="c_5" type='number' min='0' max='10' class="form-control" value=0 placeholder="CS"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">f)	Érdekelnek a legújabb ötletek és fejlemények.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="c_6" type='number' min='0' max='10' class="form-control" value=0 placeholder="FO"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">g)	Megfontolt ítéleteket hozok, és ezt a többiek is értékelik.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="c_7" type='number' min='0' max='10' class="form-control" value=0 placeholder="HE"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">h)	A munkaszervezésben lehet rám támaszkodni.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="c_8" type='number' min='0' max='10' class="form-control" value=0 placeholder="VÁ"></div>
        <p></p>
     </div>
     <p></p>
   </div>
   <script type="text/javascript">
       $('#c_div').find('input').change(function() {
         var count = 0;
           for (var i = 1; i <= 8; i++) {
             var tempVal = $('#c_'+i).val();
             count = count + Number(tempVal);
           }
           if (count > 10) {
             var value = $(this).val();
             $(this).val(value - (count - 10));
             var count = count - (count - 10);
           }
           if (count >= 10) {
             for (var i = 1; i <= 8; i++) {
               var tempVal = $('#c_'+i).val();
               if (Number(tempVal) == '' || Number(tempVal) == 0) {
                 $('#c_'+i).attr('disabled','disabled');
               } else {
                 var maxVal = $('#c_'+i).val();
                 $('#c_'+i).attr('max',maxVal);
               }
             }
           } else {
             for (var i = 1; i <= 8; i++) {
                 $('#c_'+i).removeAttr('disabled');
                 var maxX = 10 - count;
                 var maxVal = $('#c_'+i).val();
                 $('#c_'+i).attr('max',maxVal + maxX);
             }

           }
           $('#c_count').html("");
            $('#c_count').html(count+'/10');
       });
   </script>

  <!-- D SZEKCIO KEZDETE -->

  <h1 class="fas">..</h1>
  <h3 align="center">IV.	A csapatmunkához való viszonyomat az jellemzi, hogy:</h3>
    <h1 id="d_count">0/10</h1>
    <div id="d_div">
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">a)	Úgy érzem, lehetőséget jelent számomra, hogy munkatársaimat jobban megismerjem.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="d_1" type='number' min='0' max='10' class="form-control" value=0 placeholder="CS"></div>
      <p></p>
   </div><p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">b)	Akkor is hangot adok ellenvéleményemnek, ha kisebbségben maradok.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="d_2" type='number' min='0' max='10' class="form-control" value=0 placeholder="SE"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">c)	Általában meg tudom cáfolni a téves nézeteket.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="d_3" type='number' min='0' max='10' class="form-control" value=0 placeholder="HE"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">d)	Tudom, hogyan kell hozzáfogni egy terv gyakorlati megvalósításához.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="d_4" type='number' min='0' max='10' class="form-control" value=0 placeholder="VÁ"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">e)	Kerülöm a túlságosan kézenfekvő megoldásokat és a járatlan utat keresem.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="d_5" type='number' min='0' max='10' class="form-control" value=0 placeholder="ÖGY"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">f)	A közös munka során mindig a tökéletesre törekszem.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="d_6" type='number' min='0' max='10' class="form-control" value=0 placeholder="ME"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">g)	Hasznosítom a csoporton kívüli kapcsolataimat.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="d_7" type='number' min='0' max='10' class="form-control" value=0 placeholder="FO"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">h)	Minden vélemény érdekel, de ha dönteni kell, nem sokáig habozom.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="d_8" type='number' min='0' max='10' class="form-control" value=0 placeholder="EL"></div>
      <p></p>
   </div>
   <p></p>
 </div>
 <script type="text/javascript">
     $('#d_div').find('input').change(function() {
       var count = 0;
         for (var i = 1; i <= 8; i++) {
           var tempVal = $('#d_'+i).val();
           count = count + Number(tempVal);
         }
         if (count > 10) {
           var value = $(this).val();
           $(this).val(value - (count - 10));
           var count = count - (count - 10);
         }
         if (count >= 10) {
           for (var i = 1; i <= 8; i++) {
             var tempVal = $('#d_'+i).val();
             if (Number(tempVal) == '' || Number(tempVal) == 0) {
               $('#d_'+i).attr('disabled','disabled');
             } else {
               var maxVal = $('#d_'+i).val();
               $('#d_'+i).attr('max',maxVal);
             }
           }
         } else {
           for (var i = 1; i <= 8; i++) {
               $('#d_'+i).removeAttr('disabled');
               var maxX = 10 - count;
               var maxVal = $('#d_'+i).val();
               $('#d_'+i).attr('max',maxVal + maxX);
           }

         }
         $('#d_count').html("");
          $('#d_count').html(count+'/10');
     });
 </script>

    <!-- E SZEKCIO KEZDETE -->

    <h1 class="fas">..</h1>
    <h3 align="center">V.	Azért lelem örömömet a munkában, mert:</h3>
      <h1 id="e_count">0/10</h1>
      <div id="e_div">
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">a)	Szeretek különféle helyzeteket elemezni, és választási lehetőségeket mérlegelni.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="e_1" type='number' min='0' max='10' class="form-control" value=0 placeholder="HE"></div>
        <p></p>
     </div><p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">b)	Érdekel a problémák gyakorlati megoldása.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="e_2" type='number' min='0' max='10' class="form-control" value=0 placeholder="VÁ"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">c)	Szeretem érezni, hogy részem van a csoporton belüli jó munkakapcsolatok kialakításában.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="e_3" type='number' min='0' max='10' class="form-control" value=0 placeholder="CS"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">d)	Nagy mértékben tudom befolyásolni, hogy milyen döntés születik.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="e_4" type='number' min='0' max='10' class="form-control" value=0 placeholder="SE"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">e)	Érdekes emberekkel találkozhatok.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="e_5" type='number' min='0' max='10' class="form-control" value=0 placeholder="FO"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">f)	Meg tudom győzni az embereket arról, mit kell tenni.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="e_6" type='number' min='0' max='10' class="form-control" value=0 placeholder="EL"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">g)	Elememben vagyok, ha egy feladatra összpontosíthatok.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="e_7" type='number' min='0' max='10' class="form-control" value=0 placeholder="ME"></div>
        <p></p>
     </div>
     <p></p>
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <p align='center' type="button" name="button">h)	Szeretem használni a képzelőerőmet.</p></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="e_8" type='number' min='0' max='10' class="form-control" value=0 placeholder="ÖGY"></div>
        <p></p>
     </div>
     <p></p>
   </div>
   <script type="text/javascript">
       $('#e_div').find('input').change(function() {
         var count = 0;
           for (var i = 1; i <= 8; i++) {
             var tempVal = $('#e_'+i).val();
             count = count + Number(tempVal);
           }
           if (count > 10) {
             var value = $(this).val();
             $(this).val(value - (count - 10));
             var count = count - (count - 10);
           }
           if (count >= 10) {
             for (var i = 1; i <= 8; i++) {
               var tempVal = $('#e_'+i).val();
               if (Number(tempVal) == '' || Number(tempVal) == 0) {
                 $('#e_'+i).attr('disabled','disabled');
               } else {
                 var maxVal = $('#e_'+i).val();
                 $('#e_'+i).attr('max',maxVal);
               }
             }
           } else {
             for (var i = 1; i <= 8; i++) {
                 $('#e_'+i).removeAttr('disabled');
                 var maxX = 10 - count;
                 var maxVal = $('#e_'+i).val();
                 $('#e_'+i).attr('max',maxVal + maxX);
             }

           }
           $('#e_count').html("");
            $('#e_count').html(count+'/10');
       });
   </script>

  <!-- F SZEKCIO KEZDETE -->

  <h1 class="fas">..</h1>
  <h3 align="center">VI.	Ha hirtelen nehéz feladatot kapok, melyet ismeretlen emberekkel rövid idő alatt kell megoldani,</h3>
    <h1 id="f_count">0/10</h1>
    <div id="f_div">
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">a)	Visszavonulok és elgondolkodom a megoldáson, mielőtt munkához látnék.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="f_1" type='number' min='0' max='10' class="form-control" value=0 placeholder="ÖGY"></div>
      <p></p>
   </div><p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">b)	Megpróbálok együtt dolgozni azzal a személlyel, aki a leginkább konstruktív módon viszonyul a feladathoz-bármilyen személyiség is legyen.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="f_2" type='number' min='0' max='10' class="form-control" value=0 placeholder="CS"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">c)	Megpróbálom felosztani a feladatot és megállapítani, hogy ki melyik részét tudná elvégezni.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="f_3" type='number' min='0' max='10' class="form-control" value=0 placeholder="EL"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">d)	Biztosan nem kerülök időzavarba, hiszen szeretem miharabb megoldani a feladatokat.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="f_4" type='number' min='0' max='10' class="form-control" value=0 placeholder="ME"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">e)	Nem veszítem el a nyugalmamat, hanem higgadtan mérlegelem a teendőket.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="f_5" type='number' min='0' max='10' class="form-control" value=0 placeholder="HE"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">f)	Akkor sem veszítem szem elől a célt, bármilyen nyomás nehezedik rám.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="f_6" type='number' min='0' max='10' class="form-control" value=0 placeholder="VÁ"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">g)	Kész vagyok kézbe venni az irányítást, ha úgy látom, hogy nem sikerül előrelépnünk.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="f_7" type='number' min='0' max='10' class="form-control" value=0 placeholder="SE"></div>
      <p></p>
   </div>
   <p></p>
   <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <p align='center' type="button" name="button">h)	Elindítom a beszélgetést, hogy másokat is gondolkodásra késztessek, és valahogy elkezdjük a közös munkát.</p></div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="f_8" type='number' min='0' max='10' class="form-control" value=0 placeholder="FO"></div>
      <p></p>
   </div>
   <p></p>
 </div>
 <script type="text/javascript">
     $('#f_div').find('input').change(function() {
       var count = 0;
         for (var i = 1; i <= 8; i++) {
           var tempVal = $('#f_'+i).val();
           count = count + Number(tempVal);
         }
         if (count > 10) {
           var value = $(this).val();
           $(this).val(value - (count - 10));
           var count = count - (count - 10);
         }
         if (count >= 10) {
           for (var i = 1; i <= 8; i++) {
             var tempVal = $('#f_'+i).val();
             if (Number(tempVal) == '' || Number(tempVal) == 0) {
               $('#f_'+i).attr('disabled','disabled');
             } else {
               var maxVal = $('#f_'+i).val();
               $('#f_'+i).attr('max',maxVal);
             }
           }
         } else {
           for (var i = 1; i <= 8; i++) {
               $('#f_'+i).removeAttr('disabled');
               var maxX = 10 - count;
               var maxVal = $('#f_'+i).val();
               $('#f_'+i).attr('max',maxVal + maxX);
           }

         }
         $('#f_count').html("");
          $('#f_count').html(count+'/10');
     });
 </script>

 <!-- G SZEKCIO KEZDETE -->

 <h1 class="fas">..</h1>
 <h3 align="center">VII.	A közös munka során felmerülhet az a probléma, hogy:</h3>
   <h1 id="g_count">0/10</h1>
   <div id="g_div">
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">a)	Türelmetlennek mutatkozom azzal szemben, aki gátolja az előrelépést.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="g_1" type='number' min='0' max='10' class="form-control" value=0 placeholder="SE"></div>
     <p></p>
  </div><p></p>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">b)	Kritikát kapok, mert túlságosan elemző és nem eléggé intuitív módon gondolkodom.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="g_2" type='number' min='0' max='10' class="form-control" value=0 placeholder="HE"></div>
     <p></p>
  </div>
  <p></p>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">c)	Feltartom a csapatot, mert biztos akarok lenni abban, hogy mindent rendesen elvégeztünk.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="g_3" type='number' min='0' max='10' class="form-control" value=0 placeholder="ME"></div>
     <p></p>
  </div>
  <p></p>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">d)	Könnyen elunom magam, mert csak egy-két olyan ember van, akinek a jelenléte ösztönzőleg hat.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="g_4" type='number' min='0' max='10' class="form-control" value=0 placeholder="FO"></div>
     <p></p>
  </div>
  <p></p>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">e)	Nehezen kezdem el a munkát, ha még nem tettük világossá a célokat.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="g_5" type='number' min='0' max='10' class="form-control" value=0 placeholder="VÁ"></div>
     <p></p>
  </div>
  <p></p>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">f)	Nehezen tudom elmagyarázni bonyolult gondolataimat.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ><input id="g_6" type='number' min='0' max='10' class="form-control" value=0 placeholder="ÖGY"></div>
     <p></p>
  </div>
  <p></p>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">g)	Olyasmit követelek másoktól, amit magam nem tudnék teljesíteni.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="g_7" type='number' min='0' max='10' class="form-control" value=0 placeholder="EL"></div>
     <p></p>
  </div>
  <p></p>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
     <p align='center' type="button" name="button">h)	Ha sokan nem értenek velem egyet, nem ragaszkodom eléggé a saját véleményemhez.</p></div>
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><input id="g_8" type='number' min='0' max='10' class="form-control" value=0 placeholder="CS"></div>
     <p></p>
  </div>
  <p></p>
</div>
</div>

<script type="text/javascript">
    $('#g_div').find('input').change(function() {
      var count = 0;
        for (var i = 1; i <= 8; i++) {
          var tempVal = $('#g_'+i).val();
          count = count + Number(tempVal);
        }
        if (count > 10) {
          var value = $(this).val();
          $(this).val(value - (count - 10));
          var count = count - (count - 10);
        }
        if (count >= 10) {
          for (var i = 1; i <= 8; i++) {
            var tempVal = $('#g_'+i).val();
            if (Number(tempVal) == '' || Number(tempVal) == 0) {
              $('#g_'+i).attr('disabled','disabled');
            } else {
              var maxVal = $('#g_'+i).val();
              $('#g_'+i).attr('max',maxVal);
            }
          }
        } else {
          for (var i = 1; i <= 8; i++) {
              $('#g_'+i).removeAttr('disabled');
              var maxX = 10 - count;
              var maxVal = $('#g_'+i).val();
              $('#g_'+i).attr('max',maxVal + maxX);
          }

        }
        $('#g_count').html("");
         $('#g_count').html(count+'/10');
    });
</script>

          <div class="col-lg-12">
            <p></p>
          </div>
          <h3 align="center">
            <button type="button" onclick="kieertekel()" class="btn btn-success">Beküldés</button>
          </h3>
      <script type="text/javascript">
          $('.col-lg-3').attr("class", "col-lg-3 col-md-6 col-sm-6");

            function kieertekel() {
                var nev = $('#nev').val();
                if (nev == '') {
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
                var a = $('#a_count').html();
                var b = $('#b_count').html();
                var c = $('#c_count').html();
                var d = $('#d_count').html();
                var e = $('#e_count').html();
                var f = $('#f_count').html();
                var g = $('#g_count').html();
                if (a != '10/10' ||b != '10/10' ||c != '10/10' ||d != '10/10' ||e != '10/10' ||f != '10/10' ||g != '10/10') {
                  new PNotify({
                      title: 'Hiba',
                      text: 'Ajjajjj nem osztottad el mindenhol a 10 pontot!',
                      animate: { animate: true, in_class: 'bounceInLeft',
                      out_class: 'bounceOutRight',},
                      type: "error",
                      hide: true,
                    });
                    return;
                }
                var arr = new Array;
                var values = new Array;
                var values = {'VÁ':0,'EL':0,'SE':0,'ÖGY':0,'FO':0,'HE':0,'CS':0,'ME':0};
                for (var i = 1; i <= 8; i++) {
                  var a_val = $('#a_'+i).val();
                  var a_val = Number(a_val);
                  if (a_val > 0 ) {
                  var a_kat = $('#a_'+i).attr('placeholder');
                  values[a_kat] += a_val;
                }
                  var b_val = $('#b_'+i).val();
                  var b_val = Number(b_val);
                  if (b_val > 0) {
                  var b_kat = $('#b_'+i).attr('placeholder');
                  values[b_kat] += b_val;
                }
                  var c_val = $('#c_'+i).val();
                  var c_val = Number(c_val);
                  if (c_val > 0) {
                  var c_kat = $('#c_'+i).attr('placeholder');
                  values[c_kat] += c_val;
                }
                  var d_val = $('#d_'+i).val();
                  var d_val = Number(d_val);
                  if (d_val > 0) {
                  var d_kat = $('#d_'+i).attr('placeholder');
                  values[d_kat] += d_val;
                }
                  var e_val = $('#e_'+i).val();
                  var e_val = Number(e_val);
                  if (e_val > 0) {
                  var e_kat = $('#e_'+i).attr('placeholder');
                  values[e_kat] += e_val;
                }
                  var f_val = $('#f_'+i).val();
                  var f_val = Number(f_val);
                  if (f_val > 0) {
                  var f_kat = $('#f_'+i).attr('placeholder');
                  values[f_kat] += f_val;
                }
                  var g_val = $('#g_'+i).val();
                  var g_val = Number(g_val);
                  if (g_val > 0) {
                  var g_kat = $('#g_'+i).attr('placeholder');
                  values[g_kat] += g_val;
                }
              }


                 val = new Array({'VA':values['VÁ'],'EL':values['EL'],'SE':values['SE'],'OGY':values['ÖGY'],'FO':values['FO'],'HE':values['HE'],'CS':values['CS'],'ME':values['ME']});
                $.post("../ajax/ajax.teszt.php", {
                  nev: nev,
                  tipus: "Belbin",
                  adatok: val,
                },
                "json").done(function( response ) {
                  console.log("saving: " + response);
                });
                var a = values['VÁ'];
                var b = values['EL'];
                var c = values['SE'];
                var d = values['ÖGY'];
                var e = values['FO'];
                var f = values['HE'];
                var g = values['CS'];
                var h = values['ME'];
                var maxOfAns = Math.max(a,b,c,d,e,f,g,h);
                switch (maxOfAns) {
                  case a:
                  $('#VÁ').removeAttr('hidden');
                  break;
                  case b:
                  $('#EL').removeAttr('hidden');
                  break;
                  case c:
                  $('#SE').removeAttr('hidden');
                  break;
                  case d:
                  $('#ÖGY').removeAttr('hidden');
                  break;
                  case e:
                  $('#FO').removeAttr('hidden');
                  break;
                  case f:
                  $('#HE').removeAttr('hidden');
                  break;
                  case g:
                  $('#CS').removeAttr('hidden');
                  break;
                  case h:
                  $('#ME').removeAttr('hidden');
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
