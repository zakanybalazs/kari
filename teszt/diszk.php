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
    align-self: center;
  }
  .btn-circle:hover {
    box-shadow: 4px 4px 12px #888888;
  }
  }
  @media (max-width: 2000px) {
    .btn-circle {
    align-self: center;
  }
  .btn-circle:hover {
    box-shadow: 4px 4px 12px #888888;
  }
  }
  .formcontrol {
    display: block;
    width: 100%;
    height: 34px;
    padding: 2px 2px;
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
  .sec {
    background-color: #fff;
  }
</style>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button  type="button" class="btn-circle btn-default" onclick="goTo('index.php')" name="button">Florence</button>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button type="button" class="btn-circle btn-default" onclick="goTo('belbin.php')" name="button">Belbin</button>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <button type="button" class="btn-circle btn-inline-default" onclick="goTo('diszk.php')" name="button">DiSzK</button>
      </div>
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
      <script type="text/javascript">
          function scrolling() {
            $.scrollTo('#ertekeles', 2000);
          }
          </script>
      <p class="fas">..</p>
      <h3 align="center">Személyiség teszt</h1>
        <!-- Kiértékelési felület (section kiertekel) -->
        <section id="ertekeles">
          <div class="container well" id="hidingWell" hidden="hidden">
            <h2 align="center">Válaszok kiértékelése</h2>
            <h4>Pontszámok:</h4>
            <label>D: <span id="D_ert">5</span> p</label>
            <div class="progress">
                <div id="D_st" class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="28" style="width: 30%">
                </div>
            </div>
            <label>I: <span id="I_ert">10</span> p</label>
            <div class="progress">
                <div id="I_st" class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="28" style="width: 40%">
                </div>
            </div>
            <label>Sz: <span id="Sz_ert">1</span> p</label>
            <div class="progress">
                <div id="Sz_st" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="28" style="width: 3%">
                </div>
            </div>
            <label>K: <span id="K_ert">3</span> p</label>
            <div class="progress">
                <div id="K_st" class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="28" style="width: 10%">
                </div>
            </div>
            <h2>A betűkhöz tartozó tulajdonságok</h2>
            <div class="row">
              <div class="col-lg-6 col-md-6">
            <h3>D</h3>
            <h4>Erősségek</h4>
            <p>Célkitűzés, Probléma-megoldás, Döntés</p>
            <h4>Gyenge pontok</h4>
            <p>Nem óvatos, hibák keresése, lerohanás</p>
            <h4>Szükségletek</h4>
            <p>Hatalom, Ellenőrzés, önrendelkezés</p>
            <p></p>
            </div>
            <div class="col-lg-6 col-md-6">
            <h3>I</h3>
            <h4>Erősségek</h4>
            <p>Kommunikáció, Pozitív hozzáállás, Kezdeményezés</p>
            <h4>Gyenge pontok</h4>
            <p>Szóáradat, Érzelmi döntések, Végigvitel hiánya</p>
            <h4>Szükségletek</h4>
            <p>Hagyják beszélni, Elismerés, Pezsgés</p>
            <p></p>
            </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
            <h3>Sz</h3>
            <h4>Erősségek</h4>
            <p>Hűség, Meghallgatás, Türelem
            </p>
            <h4>Gyenge pontok</h4>
            <p>Túlzott birtokvágy, Konfliktus-kerülés, Kockázat-kerülés
            </p>
            <h4>Szükségletek</h4>
            <p>Stabilitás, biztonság, Megbecsülés, Idő
            </p>
            <p></p>
            </div>
            <div class="col-lg-6 col-md-6">
            <h3>K</h3>
            <h4>Erősségek</h4>
            <p>Elemzés, Pontosság, Magas mérce
            </p>
            <h4>Gyenge pontok</h4>
            <p>Halogatás, Merevség, Túlzott kritika
            </p>
            <h4>Szükségletek</h4>
            <p>Tények, Precíziós munka, Idő
            </p>
          </div>
          </div>
        </section>
      <p class="fas">..</p>
      <h3>Útmutató:</h3>
      <p>A 28 csoport szavaiból válassz ki csoportonként egyet, amelyikről úgy érzed, hogy a <strong>leginkább</strong>, és egyet, amelyikről úgy érzed, hogy a <strong>legkevésbé</strong> illik Rád!</p>
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

        </div>
        <div class="col-lg-3">
        </div>
      </div>
      <style media="screen">
        .btn-group {
          width: 100%;
        }
        .btn {
          width: 50%;
        }
      </style>
        <!-- 1 -->
        <!-- <div class="col-lg-6">- -->
        <?php
        $q = "SELECT * FROM diszk ORDER BY sor ASC";
        $sq = mysqli_query($server, $q);
        $sqaa =  array();
        function array_push_assoc($array, $key, $value){
          $array[$key] = $value;
          return $array;
        }
        while ($sqa = mysqli_fetch_assoc($sq)) {
           $nev = $sqa['nev'];
          array_push($sqaa,array('sor'=>$sqa['sor'],'jel'=>$sqa['jel'],'nev'=>$nev));
      }
      for ($i=0 ; $i < sizeof($sqaa); $i+=4) {
         ?>
              <div class="col-lg-6 col-md-6 col-sm-6" id="div_<?php echo $sqaa[$i]['sor']; ?>">
                <h3 align="center"><?php echo $sqaa[$i]['sor']; ?>.</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <p align='center'><?php echo $sqaa[$i]['nev']; ?></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="btn-group">
                        <input type="number" value=0 placeholder="<?php echo $sqaa[$i]['jel']; ?>" id="val_<?php echo $sqaa[$i]['sor']; ?>_1" hidden="hidden">
                          <button type="button" id="plus_<?php echo $sqaa[$i]['sor']; ?>_1" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                          <button type="button" id="minus_<?php echo $sqaa[$i]['sor']; ?>_1" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </div>
                      </div><p></p>
                    </div>
                  <p></p>

                  <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p align='center'><?php echo $sqaa[$i+1]['nev']; ?></p>
                   </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="btn-group">
                      <input type="number" value=0 placeholder="<?php echo $sqaa[$i+1]['jel']; ?>" id="val_<?php echo $sqaa[$i]['sor']; ?>_2" hidden="hidden">
                        <button type="button" id="plus_<?php echo $sqaa[$i]['sor']; ?>_2" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        <button type="button" id="minus_<?php echo $sqaa[$i]['sor']; ?>_2" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                    </div><p></p>
                  </div>
                  </div>
                <p></p>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p align='center'><?php echo $sqaa[$i+2]['nev']; ?></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="btn-group">
                      <input type="number" value=0 placeholder="<?php echo $sqaa[$i+2]['jel']; ?>" id="val_<?php echo $sqaa[$i]['sor']; ?>_3" hidden="hidden">

                      <button type="button" id="plus_<?php echo $sqaa[$i]['sor']; ?>_3" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      <button type="button" id="minus_<?php echo $sqaa[$i]['sor']; ?>_3" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                    </div><p></p>
                  </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <p align='center'><?php echo $sqaa[$i+3]['nev']; ?></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="btn-group">
                        <input type="number" value=0 placeholder="<?php echo $sqaa[$i+3]['jel']; ?>" id="val_<?php echo $sqaa[$i]['sor']; ?>_4" hidden="hidden">

                          <button type="button" id="plus_<?php echo $sqaa[$i]['sor']; ?>_4" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                          <button type="button" id="minus_<?php echo $sqaa[$i]['sor']; ?>_4" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
                      </div><p></p>
                    </div>
                </div>
                <p></p>
              </div>
      <?php } ?>
      <!-- </div> -->
        <!-- Automata selector a + - értékeknek -->
        <script type="text/javascript">
          $('.btn-group').find('button').click(function(event) {
            event.preventDefault();
            var that = $(this).attr('class');
            var div_i = $(this).parents('.btn-group').children('input').attr('id').split('_')[1];
            var btn_i = $(this).attr('id').split('_')[2];
            if (that == 'btn btn-success' || that == 'btn btn-success disabled') {
              $('#minus_'+div_i+'_'+btn_i).attr('class', 'btn btn-danger');
                for (var z = 1; z <= 4; z++) {
                  $('#plus_'+div_i+'_'+z).attr('class', 'btn btn-success');
                }
                for (var i = 1; i <= 4; i++) {
                  if ($('#val_'+div_i+"_"+i).val() == 1) {
                      $('#val_'+div_i+"_"+i).val(0);
                  }
                }
                $(this).parents('.btn-group').children('input').val(1);
                $(this).attr('class','btn btn-success disabled');

            } else {
              $('#plus_'+div_i+'_'+btn_i).attr('class', 'btn btn-success');
                for (var z = 1; z <= 4; z++) {
                  $('#minus_'+div_i+'_'+z).attr('class', 'btn btn-danger');
                }
                for (var i = 1; i <= 4; i++) {
                  if ($('#val_'+div_i+"_"+i).val() == -1) {
                      $('#val_'+div_i+"_"+i).val(0);
                  }
                }
                $(this).parents('.btn-group').children('input').val(-1);
                $(this).attr('class','btn btn-danger disabled');
            }
          });
        </script>
          <div class="col-lg-12">
            <p></p>
          </div>
          <div class="col-lg-12">
          <h3 align="center">
            <button type="button" onclick="kieertekel()" class="btn btn-success">Beküldés</button>
          </h3>
        </div>
      <script type="text/javascript">
          $('.col-lg-3').attr("class", "col-lg-3 col-md-6 col-sm-6");
            function kieertekel() {
                var nev = $('#nev').val();
                for (var i = 1; i <= 28; i++) {
                  var poz = 0;
                  var neg = 0;
                  for (var z = 1; z <= 4; z++) {
                    var val = $('#val_'+i+"_"+z).val();
                    if (val > 0) {
                      poz = 1;
                    } else if (val < 0) {
                      neg = 1;
                    }
                  }
                  if (poz == 0 || neg == 0) {
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
                var arr = new Array;
                var values = new Array;
                var values = {'D':0,'I':0,'Sz':0,'K':0};
                for (var i = 1; i <= 28; i++) {
                  for (var z = 1; z <= 4; z++) {
                    var val = $('#val_'+i+"_"+z).val();
                    var val = Number(val);
                    var kat = $('#val_'+i+"_"+z).attr('placeholder');
                    if (kat == 'D\n') {
                      kat = 'D';
                      values[kat] += val;
                    } else {
                      values[kat] += val;
                  }
                    // console.log('#val_'+i+"_"+z+" "+kat+" : "+val);
                  }
                }


                 console.log(values);
                $.post("../ajax/ajax.teszt.php", {
                  nev: nev,
                  tipus: "diszk",
                  adatok: values,
                },
                "json").done(function( response ) {
                  console.log("saving: " + response);
                  $('#D_ert').html(values['D']);
                  var d_w = (values['D'] / 28)*100;
                  $('#D_st').attr('style',"width: "+d_w+"%");

                  $('#I_ert').html(values['I']);
                  var i_w = (values['I'] / 28)*100;
                  $('#I_st').attr('style',"width: "+i_w+"%");

                  $('#Sz_ert').html(values['Sz']);
                  var Sz_w = (values['Sz'] / 28)*100;
                  $('#Sz_st').attr('style',"width: "+Sz_w+"%");

                  $('#K_ert').html(values['K']);
                  var k_w = (values['K'] / 28)*100;
                  $('#K_st').attr('style',"width: "+k_w+"%");
                });

                scrolling();
                setTimeout(function(){ $('#hidingWell').slideDown(2000); }, 1000);
            }
        </script>
          <div class="col-lg-3">
          </div>
        </div>
        <p></p>

      </div>
    </body>
    </html>
