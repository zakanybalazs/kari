<?php
require_once '../../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
 ?>
 <html>
 <head>
   <meta charset="utf-16">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Viapan karácsony</title>
     <link rel="stylesheet" href="../../assets/css/Navigation-with-Button1.css">
     <link rel="stylesheet" href="../../assets/css/Simple-Vertical-Navigation-Menu.css">
     <link rel="stylesheet" href="../../assets/css/styles.css">
     <link rel="stylesheet" href="../../assets/css/pnotify.custom.css">
     <link rel="stylesheet" href="../../assets/css/animate.css">
     <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <script src="../../assets/js/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
 <script src="../../assets/js/pnotify.custom.js" charset="utf-8"></script>
   <script src="../../assets/js/datatables.js" charset="utf-8"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/alasql/0.3/alasql.min.js"></script>
 <body>
<style media="screen">
     html {
       background: url(../../assets/img/program-background.svg) no-repeat center center fixed;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
     }
     body {
       background: url(../../assets/img/program-background.svg) no-repeat center center fixed;
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
         color: #a0cc3a;
       }
       .btn-success {
         box-shadow: 2px 2px 8px #888888;
       }
       .btn-success:hover {
         box-shadow: 6px 6px 12px #888888;
       }
 </style>
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

<!DOCTYPE html>
  <body>
    <div class="container well">
      <h1 align="center">Teszt értékelés</h1>
      <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="well col-lg-8 col-md-8 col-sm-8 col-xs-12" style="background-color:#fff">
          <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
              <p></p>
              <script src="../../chosen/chosen.jquery.js" charset="utf-8"></script>
              <link rel="stylesheet" href="../../chosen/chosen.css">
              <label>Kitöltő neve</label>
              <select class="chosen-select" id="nev">
                <?php
                if(!empty($_GET['nev'])) {
                  $nev = $_GET['nev'];
                  echo "<option selected>$nev</option>";
                }
                $q = "SELECT * FROM teszt GROUP BY nev ORDER BY teszt_id DESC";
                $sq = mysqli_query($server, $q);
                while ($sqa = mysqli_fetch_assoc($sq)) {?>
                  <option><?php echo $sqa['nev'] ?></option>
                <?php } ?>
            </div>
          </select>
          <script type="text/javascript">
            $(".chosen-select").chosen({width:"100%"});
          </script>

              <p></p>
              <label>Teszt típus</label>
              <select class="form-control" id="teszt_tipus">
                <option selected disabled>Válassz</option>
                <option>Florence</option>
                <option>Belbin</option>
                <option value="diszk">Diszk</option>
              </select>
              <label style="color:fff">.</label>
              <button type="button" class="btn btn-success form-control" onclick="keres()"><i class="fa fa-search" aria-hidden="true"></i> Keresés</button>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
              <p></p>
              <label>Kitöltő neve (utolsó 12)</label>
              <?php
                $q = "SELECT * FROM teszt GROUP BY nev ORDER BY teszt_id DESC";
                $sq = mysqli_query($server, $q);
                $x = 0;
                while($sqa = mysqli_fetch_assoc($sq)) {
                  if ($x < 6) { ?>
                   <p></p>
                  <button class="kit btn btn-default form-control"><?php echo $sqa['nev']; ?></button>
              <?php } $x += 1; } ?>
              <script type="text/javascript">
                $('.kit').on('click', function() {
                  var kit = $(this).html();
                  $('#nev').val(kit);
                  $('#nev').trigger("chosen:updated");
                });
              </script>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
              <p></p>
              <label style="color:#fff">..</label>
              <?php
                $q = "SELECT * FROM teszt GROUP BY nev ORDER BY teszt_id DESC";
                $sq = mysqli_query($server, $q);
                $x = 0;
                while($sqa = mysqli_fetch_assoc($sq)) {
                  if ($x > 5 && $x < 12) { ?>
                   <p></p>
                  <button class="kit btn btn-default form-control"><?php echo $sqa['nev']; ?></button>
              <?php } $x += 1; } ?>
              <script type="text/javascript">
                $('.kit').on('click', function() {
                  var kit = $(this).html();
                  $('#nev').val(kit);
                  $('#nev').trigger("chosen:updated");
                })
              </script>
            </div>
            <p></p>
          </div>
          <h2 align='center'>Eredmény megtekintése</h2>
          <div id="ert" hidden="hidden">
          <h3>Elért pontszámok:</h3>
          <p id='pontszamok'></p>
          <h3>Értékelés:</h3>
          <div id="ertekeles">

           </div>
         </div>
<script type="text/javascript">
  function keres(){
    var nev = $('#nev option:selected').val();
    var teszt = $('#teszt_tipus option:selected').val();
    if (teszt == 'Diszk') {
      teszt == 'diszk';
    }
    if (nev == '' || teszt == 'Válassz') {
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
    $('#ert').slideUp(1200);
    setTimeout(function(){
      $('#ertekeles').empty();
      $('#pontszamok').empty();
      $.post("../../ajax/ajax.ertekeles.php", {
        nev: nev,
        teszt: teszt,
      },
      "json").done(function( response ) {
        console.log(response[0]);
          if (response[1] == null) {
            $('#pontszamok').append('<p>Nincs megjeleníthető adat</p>')
          }
          if (response[2] == "Florence") {
            $('#pontszamok').append('<p>a : '+response[0].a+' pont</p>');
            $('#pontszamok').append('<p>b : '+response[0].b+' pont</p>');
            $('#pontszamok').append('<p>c : '+response[0].c+' pont</p>');
            $('#pontszamok').append('<p>d : '+response[0].d+' pont</p>');
          }
          if (response[2] == "Belbin") {
            $('#pontszamok').append('<p>VÁ : '+response[0][0]['VA']+' pont  |  EL : '+response[0][0]['EL']+' pont</p>');
            $('#pontszamok').append('<p>FO : '+response[0][0]['FO']+' pont  |   HE : '+response[0][0]['HE']+' pont</p>');
            $('#pontszamok').append('<p>ME : '+response[0][0]['ME']+' pont  |   ÖGY : '+response[0][0]['OGY']+' pont</p>');
            $('#pontszamok').append('<p>SE : '+response[0][0]['SE']+' pont  |   CS : '+response[0][0]['CS']+' pont</p>');
          }
          if (response[2] == "diszk") {
            $('#pontszamok').append('<p>D : '+response[0]['D']+' pont</p>');
            $('#pontszamok').append('<p>I : '+response[0]['I']+' pont</p>');
            $('#pontszamok').append('<p>Sz : '+response[0]['Sz']+' pont</p>');
            $('#pontszamok').append('<p>K : '+response[0]['K']+' pont</p>');
          }
          $(response[1]).appendTo('#ertekeles');
          $('#ert').slideDown(1200);
      });
    }, 1200);
  }
</script>


        </div>
    </div>
  </body>
</html>
