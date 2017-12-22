<?php
include_once 'config/header.php';
require_once 'config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $q = "UPDATE vendegek SET status = 1 WHERE nev_id = '{$id}'";
  $sq = mysqli_query($server, $q);
  if (!$sq) {
    echo $server->error;
  }
} else { ?>
  <script type="text/javascript">
     window.location.href = 'be.php';
  </script>
<?php } ?>
<!DOCTYPE html>
<body>
  <style media="screen">
    .aa {
        font-size: 130%;
    }
    .cc {
        font-size: 130%;
    }
    @media (max-width: 991px) {
      .btn-lg {
      width: 100%;
    }

    }
    @media (max-width: 1073px) {
      .btn-lg {
      width: 200px;
    }

    }
    @media (max-width: 2500px) {
      .btn-lg {
      width: 220px;
    }
    }
  </style>
  <h1 align="center" style="color:#fff">Üdvözöllek a Viapan karácsonyi partin!</h1>
  <h1></h1>
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div id="elso" class="container col col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <p></p>
    <h3><strong>Munka és Magánélet egyensúly szuperhősképző</strong></h3>
    <p></p>
    <p>Helyszín: recepció melletti terem</p>
    <p></p>
    <p>Regisztrálj az előadásra:</p>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="a_1" class="aa btn btn-lg btn-default"><i id="k_1" class="fa fa-circle-o"></i>  14:30 - 15:10 <i id="x_1"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="a_2" class="aa btn btn-lg btn-default"><i id="k_2" class="fa fa-circle-o"></i>  15:30 - 16:10 <i id="x_2"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">

<p align="center">

      <button id="a_3" class="aa btn btn-lg btn-default"><i id="k_3" class="fa fa-circle-o"></i>  16:30 - 17:10 <i id="x_3"></i></button>
    </p>
      <p></p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
      <p align="center">
      <button class="btn btn-lg btn-success" onclick="uS('#elso','a','k')">Regisztrálok</i></button>
    </p>
      <p class="fas">..</p>
    </div>
    <p></p>
  </div>
  <script type="text/javascript">
      //selecting the options
      $('.aa').on("click", function() {
        var ide = $(this).attr('id');
        var idee = ide.split('_')[1];
        if ($('#k_' + idee).attr('class') == "fa fa-circle-o") {
          $('#k_' + idee).attr('class', 'fa fa-check');
          for (var i = 1; i <= 3; i++) {
            if (i != idee) {
              $('#k_' + i).attr('class', 'fa fa-circle-o');
            } else {
              $('#l_' + i).attr('class', 'fa fa-circle-o');
              $('#m_' + i).attr('class', 'fa fa-circle-o');
              $('#n_' + i).attr('class', 'fa fa-circle-o');
              $('#o_' + i).attr('class', 'fa fa-circle-o');
            }
          }
        } else {
          $('#k_' + idee).attr('class', 'fa fa-circle-o');
        }
      });
  </script>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="fas">..</p></div>
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div id="masodik" class="container col col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <p></p>
    <h3><strong>Csoportosan elkövetett önreflexió I. csoport</strong></h3>
    <p>Helyszín: 6. elemeti konferenciaterem</p>
    <p></p>
    <p>Regisztrálj az előadásra:</p>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="b_1" class="bb btn btn-lg btn-default"><i id="l_1" class="fa fa-circle-o"></i>  14:30 - 15:10 <i id="y_1"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="b_2" class="bb btn btn-lg btn-default"><i id="l_2" class="fa fa-circle-o"></i>  15:30 - 16:10 <i id="y_2"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="b_3" class="bb btn btn-lg btn-default"><i id="l_3" class="fa fa-circle-o"></i>  16:30 - 17:10 <i id="y_3"></i></button>
    </p>
      <p></p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
      <p align="center">
      <button class="btn btn-lg btn-success" onclick="uS('#masodik','b','l')">Regisztrálok</i></button>
    </p>
      <p class="fas">..</p>
    </div>
    <p></p>
  </div>
  <script type="text/javascript">
      // selecting the options

      $('.bb').on("click", function() {
        var ide = $(this).attr('id');
        var idee = ide.split('_')[1];
        if ($('#l_' + idee).attr('class') == "fa fa-circle-o") {
          $('#l_' + idee).attr('class', 'fa fa-check');
          for (var i = 1; i <= 3; i++) {
            if (i != idee) {
              $('#l_' + i).attr('class', 'fa fa-circle-o');
            } else {
              $('#k_' + i).attr('class', 'fa fa-circle-o');
              $('#m_' + i).attr('class', 'fa fa-circle-o');
              $('#n_' + i).attr('class', 'fa fa-circle-o');
              $('#o_' + i).attr('class', 'fa fa-circle-o');
            }
          }

        } else {
          $('#l_' + idee).attr('class', 'fa fa-circle-o');
        }
      });
  </script>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="fas">..</p></div>
    <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div id="harmadik" class="container col col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <p></p>
    <h3><strong>Csoportosan elkövetett önreflexió II. csoport</strong></h3>
    <p>Helyszín: 7.emeleti konferenciaterem</p>
    <p></p>
    <p>Regisztrálj az előadásra:</p>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="c_1" class="cc btn btn-lg btn-default"><i id="m_1" class="fa fa-circle-o"></i>  14:30 - 15:10 <i id="z_1"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="c_2" class="cc btn btn-lg btn-default"><i id="m_2" class="fa fa-circle-o"></i>  15:30 - 16:10 <i id="z_2"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">

<p align="center">

      <button id="c_3" class="cc btn btn-lg btn-default"><i id="m_3" class="fa fa-circle-o"></i>  16:30 - 17:10 <i id="z_3"></i></button>
    </p>
      <p></p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
      <p align="center">
      <button class="btn btn-lg btn-success" onclick="uS('#harmadik','c','m')">Regisztrálok</i></button>
    </p>
      <p class="fas">..</p>
    </div>
    <p></p>
  </div>
  <script type="text/javascript">
      //selecting the options
      $('.cc').on("click", function() {
        var ide = $(this).attr('id');
        var idee = ide.split('_')[1];
        if ($('#m_' + idee).attr('class') == "fa fa-circle-o") {
          $('#m_' + idee).attr('class', 'fa fa-check');
          for (var i = 1; i <= 3; i++) {
            if (i != idee) {
              $('#m_' + i).attr('class', 'fa fa-circle-o');
            } else {
              $('#k_' + i).attr('class', 'fa fa-circle-o');
              $('#l_' + i).attr('class', 'fa fa-circle-o');
              $('#n_' + i).attr('class', 'fa fa-circle-o');
              $('#o_' + i).attr('class', 'fa fa-circle-o');
            }
          }
        } else {
          $('#m_' + idee).attr('class', 'fa fa-circle-o');
        }
      });
  </script>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="fas">..</p></div>
    <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div id="negyedik" class="container col col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <p></p>
    <h3><strong>Lámi a chatrobot Lám, a láma még chatel is</strong></h3>
    <p>Helyszín: Lobby</p>
    <p></p>
    <p>Regisztrálj az előadásra:</p>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="d_1" class="dd btn btn-lg btn-default"><i id="n_1" class="fa fa-circle-o"></i>  14:30 - 14:50 <i id="w_1"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="d_2" class="dd btn btn-lg btn-default"><i id="n_2" class="fa fa-circle-o"></i>  15:30 - 15:50 <i id="w_2"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">

<p align="center">

      <button id="d_3" class="dd btn btn-lg btn-default"><i id="n_3" class="fa fa-circle-o"></i>  16:30 - 16:50 <i id="w_3"></i></button>
    </p>
      <p></p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
      <p align="center">
      <button class="btn btn-lg btn-success" onclick="uS('#negyedik','d','n')">Regisztrálok</i></button>
    </p>
      <p class="fas">..</p>
    </div>
    <p></p>
  </div>
  <script type="text/javascript">
  //selecting the options
  $('.dd').on("click", function() {
    var ide = $(this).attr('id');
    var idee = ide.split('_')[1];
    if ($('#n_' + idee).attr('class') == "fa fa-circle-o") {
      $('#n_' + idee).attr('class', 'fa fa-check');
      for (var i = 1; i <= 3; i++) {
        if (i != idee) {
          $('#n_' + i).attr('class', 'fa fa-circle-o');
        } else {
          $('#k_' + i).attr('class', 'fa fa-circle-o');
          $('#l_' + i).attr('class', 'fa fa-circle-o');
          $('#m_' + i).attr('class', 'fa fa-circle-o');
          $('#o_' + i).attr('class', 'fa fa-circle-o');
        }
      }
    } else {
      $('#n_' + idee).attr('class', 'fa fa-circle-o');
    }
  });
  </script>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="fas">..</p></div>
    <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div id="otodik" class="container col col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <p></p>
    <h3><strong>Lean-on</strong></h3>
    <p>Helyszín: 5. emeleti elóadó</p>
    <p></p>
    <p>Regisztrálj az előadásra:</p>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="e_1" class="ee btn btn-lg btn-default"><i id="o_1" class="fa fa-circle-o"></i>  14:30 - 14:50 <i id="u_1"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
<p align="center">

      <button id="e_2" class="ee btn btn-lg btn-default"><i id="o_2" class="fa fa-circle-o"></i>  15:30 - 15:50 <i id="u_2"></i></button>
    </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">

<p align="center">

      <button id="e_3" class="ee btn btn-lg btn-default"><i id="o_3" class="fa fa-circle-o"></i>  16:30 - 16:50 <i id="u_3"></i></button>
    </p>
      <p></p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
      <p align="center">
      <button class="btn btn-lg btn-success" onclick="uS('#otodik','e','o')">Regisztrálok</i></button>
    </p>
      <p class="fas">..</p>
    </div>
    <p></p>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p class="fas">..</p></div>
  <script type="text/javascript">
  //selecting the options
  $('.ee').on("click", function() {
    var ide = $(this).attr('id');
    var idee = ide.split('_')[1];
    if ($('#o_' + idee).attr('class') == "fa fa-circle-o") {
      $('#o_' + idee).attr('class', 'fa fa-check');
      for (var i = 1; i <= 3; i++) {
        if (i != idee) {
          $('#o_' + i).attr('class', 'fa fa-circle-o');
        } else {
          $('#k_' + i).attr('class', 'fa fa-circle-o');
          $('#l_' + i).attr('class', 'fa fa-circle-o');
          $('#m_' + i).attr('class', 'fa fa-circle-o');
          $('#n_' + i).attr('class', 'fa fa-circle-o');
        }
      }
    } else {
      $('#o_' + idee).attr('class', 'fa fa-circle-o');
    }
  });
  </script>




  <script type="text/javascript">
  // update database with selection
  $(function() {
    var id = <?php echo $_GET['id']; ?>;
    $.post("ajax/ajax.progok.php", {
      id: id
    },
    "json").done(function( response ) {
      console.log(response);
      $('#'+response.a).attr('class', 'btn btn-success btn-lg');
      $('#'+response.b).attr('class', 'btn btn-success btn-lg');
      $('#'+response.c).attr('class', 'btn btn-success btn-lg');
      $('#'+response.d).attr('class', 'btn btn-success btn-lg');
      $('#'+response.e).attr('class', 'btn btn-success btn-lg');
    });
  });


  function uS(id, b, i) {
      for (var z = 1; z <= 3; z++) {
        var suc = $('#'+i+'_'+z).attr('class');
        if (suc == 'fa fa-check') {
          $('#'+b+'_1').attr('class','btn btn-default btn-lg');
          $('#'+b+'_2').attr('class','btn btn-default btn-lg');
          $('#'+b+'_3').attr('class','btn btn-default btn-lg');

          $('#a_'+z).attr('class','btn btn-default btn-lg');
          $('#b_'+z).attr('class','btn btn-default btn-lg');
          $('#c_'+z).attr('class','btn btn-default btn-lg');
          $('#d_'+z).attr('class','btn btn-default btn-lg');
          $('#e_'+z).attr('class','btn btn-default btn-lg');
          $('#'+b+'_'+z).attr('class','btn btn-success btn-lg');
          var prog = b + "_" + z;
          $.post("ajax/ajax.updateone_prog.php", {
            id: '<?php echo $id ?>',
            name: b,
            value: prog
          },
          "json").done(function( response ) {
            if (response == "ok") {
            var notice = new PNotify({
                  title: 'Siker',
                  text: 'Rendben!\nFoglalunk neked egy helyet!\nErre az időpontra már nem tudsz másik programot választani.',
                  type: 'success',
                  addclass: 'translucent',
                  nonblock: {
                      nonblock: true
                  }
              });
               notice.get().click(function() {
                  notice.remove();
              });
            }
          });
        }
      }
  }

  // update the attendence in every 3 seconds
  setInterval(function() {
    var x = 1;
    var z = 1;
    for (var i = 1; i <= 3; i++) {
      var pr = "a_"+z;
      $.post("ajax/ajax.prog.php", {
        prog_tipus: "a",
        prog_nev: pr
      },
      "json").done(function( response ) {
        if (response != "error") {
        var e = response[0].split("_")[1];
        var current = $('#x_' + e).html().split('/')[0];
        if (current != e) {
            $('#x_' + e).html("("+response[1]+"/30)");
          }
            if (response[1] >= 30) {
              $('#'+response[0]).attr('disabled','disabled');
              $('#k_'+e).attr('class','fa fa-circle-o');
            }
        }
      });
      z += 1;
    }

  }, 500);
  setInterval(function() {
    var x = 1;
    var z = 1;
    for (var i = 1; i <= 3; i++) {
      var pr = "b_"+z;
      $.post("ajax/ajax.prog.php", {
        prog_tipus: 'b',
        prog_nev: pr
      },
      "json").done(function( response ) {
        if (response != "error") {
        var e = response[0].split("_")[1];
        var current = $('#x_' + e).html().split('/')[0];
        if (current != e) {
            $('#y_' + e).html("("+response[1]+"/15)");
          }
            if (response[1] >= 15) {
              $('#'+response[0]).attr('disabled','disabled');
              $('#l_'+e).attr('class','fa fa-circle-o');
            }
        }
      });
      z += 1;
    }

  }, 500);
  setInterval(function() {
    var x = 1;
    var z = 1;
    for (var i = 1; i <= 3; i++) {
      var pr = "c_"+z;
      $.post("ajax/ajax.prog.php", {
        prog_tipus: "c",
        prog_nev: pr
      },
      "json").done(function( response ) {
        if (response != "error") {
        var e = response[0].split("_")[1];
        var current = $('#z_' + e).html().split('/')[0];
        if (current != e) {
            $('#z_' + e).html("("+response[1]+"/15)");
          }
            if (response[1] >= 15) {
              $('#'+response[0]).attr('disabled','disabled');
              $('#m_'+e).attr('class','fa fa-circle-o');
            }
        }
      });
      z += 1;
    }

  }, 500);
  setInterval(function() {
    var x = 1;
    var z = 1;
    for (var i = 1; i <= 3; i++) {
      var pr = "d_"+z;
      $.post("ajax/ajax.prog.php", {
        prog_tipus: "d",
        prog_nev: pr
      },
      "json").done(function( response ) {
        if (response != "error") {
        var e = response[0].split("_")[1];
        var current = $('#w_' + e).html().split('/')[0];
        if (current != e) {
            $('#w_' + e).html("("+response[1]+"/14)");
          }
            if (response[1] >= 14) {
              $('#'+response[0]).attr('disabled','disabled');
              $('#n_'+e).attr('class','fa fa-circle-o');
            }
        }
      });
      z += 1;
    }

  }, 500);
  setInterval(function() {
    var x = 1;
    var z = 1;
    for (var i = 1; i <= 3; i++) {
      var pr = "e_"+z;
      $.post("ajax/ajax.prog.php", {
        prog_tipus: "e",
        prog_nev: pr
      },
      "json").done(function( response ) {
        if (response != "error") {
        var e = response[0].split("_")[1];
        var current = $('#u_' + e).html().split('/')[0];
        if (current != e) {
            $('#u_' + e).html("("+response[1]+"/25)");
          }
            if (response[1] >= 25) {
              $('#'+response[0]).attr('disabled','disabled');
              $('#o_'+e).attr('class','fa fa-circle-o');
            }
        }
      });
      z += 1;
    }

  }, 500);

  </script>
  <script type="text/javascript">
var idleTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every second.
    var idleInterval = setInterval(timerIncrement, 1000); // 1 sec

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;
    console.log(idleTime);
    if (idleTime > 90) { // 20 sec
        window.location.href="be.php";
    }
}
</script>
</body>
</html>
