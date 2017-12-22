<?php
require_once '../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
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
   <!-- <link rel="stylesheet" href="../datatables/datatables.css"> -->
   <!-- <link href="https://www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet"> -->
   <script src="../assets/js/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
   <script src="../assets/js/pnotify.custom.js" charset="utf-8"></script>
   <script src="../assets/js/datatables.js" charset="utf-8"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- <script src="https://www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/alasql/0.3/alasql.min.js"></script>
   </head>
 <body style="background-color:rgb(250,250,250);" class="fuelux">
<style media="screen">
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
      height: 100px;
      width: 100px;
      border-radius: 50%;
    }
   .btn-circle:hover {
     box-shadow: 4px 4px 12px #888888;
   }
   }
  .tt {
    height: 40px;
    width: 40px;
    border-radius: 50%;
  }
</style>
  <body>
    <div class="container well">
      <h1 align="center">Viapan karácsonyi parti</h1>
      <h2 id="per"></h2>
        <h2>Programok</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <p></p>
            <label>Program</label>
            <select class="form-control" id="prog_name">
              <option selected disabled>Válassz</option>
              <option value="a">Munka és Magánélet egyensúly szuperhősképző</option>
              <option value="b">Csoportosan elkövtett önreflexió I. csoport</option>
              <option value="c">Csoportosan elkövetett önreflexió II. csoport</option>
              <option value="d">Lámi a chatrobot Lám, a láma még chatel is</option>
              <option value="e">Lean-on</option>
            </select>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <p></p>
            <label>Időpont</label>
            <select class="form-control" id="prog_num">
              <option selected disabled>Válassz</option>
              <option value="1">14:30</option>
              <option value="2">15:30</option>
              <option value="3">16:30</option>
            </select>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <p></p>
            <label style="color:#F5F5F5">Időpont</label>
            <button type="button" name="button" onclick="jelenlet()" id="bytn" class="btn btn-success form-control">Jelenléti ív mutatása</button>
          </div>
      </div>
        <p></p>
        <i>Létszám: <span id="kincsi">0</span></i>
          <table class="table table-hover table-striped">
            <thead>
              <th>Név</th>
              <th>Kirendeltség</th>
            </thead>
            <tbody id="tb">

            </tbody>
          </table>
<script type="text/javascript">

$('#bytn').click(function() {
  $('#kincsi').html(-1);
});

  function jelenlet() {
    var name = $('#prog_name option:selected').val();
    var num = $('#prog_num option:selected').val();
$.post("../ajax/ajax.get_prog.php", {
  name: name,
  num: num,
    },
    "json").done(function( response ) {
      console.log(response);
      var kincsi = $('#kincsi').html();
      console.log(kincsi+" < "+response.length);
        if (kincsi < response.length) {
          $('#kincsi').html(response.length);
      $('#tb').empty();
        for (var i = 0; i < response.length; i++) {
          $('#tb').append("<tr><td>"+response[i].nev+"</td><td>"+response[i].kir+"</td></tr>");
      }
      }
    });
   setTimeout(function(){ jelenlet(); }, 2000);
  }
</script>
        </div>
    </div>
  </body>
</html>
