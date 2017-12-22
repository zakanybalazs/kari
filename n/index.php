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
   <link rel="stylesheet" href="../datatables/datatables.css">
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
        <p></p>
          <table class="table table-hover table-striped">
            <thead>
              <th>Név</th>
              <th>Munka és Magánélet</th>
              <th>Önreflexió I.</th>
              <th>Önreflexió II.</th>
              <th>Lámi</th>
              <th>Státusz</th>
            </thead>
            <tbody id="activeT"></tbody>
            <tbody id="inactiveT"></tbody>
          </table>
<script type="text/javascript">
    $(document).ready(function() {
      getTableData('append');
    });

 setInterval(getTableData, 1000);
  function getTableData(ap) {
    if (ap == 'append') {
      $('#activeT').empty();
      $('#inactiveT').empty();
    }
    $.post("../ajax/ajax.active.php", {
      v: 'v',
    },
    "json").done(function( r ) {
      console.log(r);
      var a = 0;

    for (var i = 0; i < r.length; i++) {
        if (r[i].status == "active") {
      var tr = "<tr id=i_"+i+" ><td>"+r[i].nev+"</td><td>"+r[i].a+"</td><td>"+r[i].b+"</td><td>"+r[i].c+"</td><td>"+r[i].d+"</td><td><button disabled class='btn btn-success tt'><i class='fa fa-check' aria-hidden='true'></i></button></td></tr>";
      a++;
      if (ap == 'append') {
      $('#activeT').append(tr);
      }
    } else {
      var tr = "<tr id=i_"+i+" ><td>"+r[i].nev+"</td><td>N/A</td><td>N/A</td><td>N/A</td><td>N/A</td><td><button disabled class='btn btn-danger tt'><i class='fa fa-times' aria-hidden='true'></i></button></td></tr>";
          if (ap == 'append') {
            $('#inactiveT').append(tr);
          }
        }
      }
      var per = a+"/"+r.length;

      if ($('#per').html() != per) {

      $('#per').html(a+"/"+r.length);
      getTableData('append');
    }
    });
  }
</script>
        </div>
    </div>
  </body>
</html>
