<?php
include_once 'config/header.php';
require_once 'config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
 ?>
<!DOCTYPE html>
<script src="chosen/chosen.jquery.js" charset="utf-8"></script>
<link rel="stylesheet" href="chosen/chosen.css">
  <body>
    <h1 align="center">Üdvözöllek a Viapan karácsonyi partin!</h1>
    <h1></h1>
      <div class="col-lg-3 col-md-2 col-sm-2"></div>
        <div class="col col-lg-6 col-md-8 col-sm-8 col-xs-12">
          <p></p>
          <label>Név</label>
          <div class="col-lg-12">
          <select data-placeholder="" class="chosen-select" id="nev">
            <option disabled>Válassz</option>

              <?php
                $q = "SELECT nevek FROM nevek";
                $sq = mysqli_query($server, $q);
                  while ($sqa = mysqli_fetch_assoc($sq)) {?>
                      <option><?php echo ($sqa['nevek']) ?></option>
              <?php } ?>
          </select>
          <p></p>
        </div>

          <!-- <input class="form-control" type="list" list="nevek" id="nev"> -->
          <p></p>
          <label>Kirendeltség</label>
          <div class="col-lg-12">
          <select class="chosen-select" id="kir">
            <option disabled>Válassz</option>
            <option>Baja</option>
            <option>Budapest</option>
            <option>Dunaújváros</option>
            <option>Kaposvár</option>
            <option>Pécs</option>
            <option>Kecsekmét</option>
            <option>Keszthely</option>
            <option>Marcali</option>
            <option>Nagykanizsa</option>
            <option>Siófok</option>
            <option>Szigetvár</option>
            <option>Szabadka, Szerbia</option>
            <option>Szekszárd</option>
            <option>Ukrajna</option>
            <option>Zalaegerszeg</option>
            <option>HQ</option>
          </select>
          <p></p>
        </div>
          <p></p>
          <h3 align="center">
            <input type="text" hidden="hidden" id="id">
          <button type="button" onclick="feltolt()" class="btn btn-success">Beküldés</button>
        </h3>
          <script type="text/javascript">
          function feltolt() {
            var nev_val = $('#nev').val();
            var kir = $('#kir').val();
            var id = $('#id').val();
            if (nev_val == '' && kir == '') {
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
            var array = new Array({nevek: nev_val, kirendeltseg:kir});
            if (id == 'no') {
            $.post("ajax/ajax.insert.php", {
              Ptable: 'vendegek',
              data: array,
            },
            "json").done(function( response ) {
              // elmentve
              if (response == 'ok') {
              new PNotify({
                  title: 'Siker',
                  text: 'Az adataidat elmentettük! Jó szórakozást!',
                  animate: { animate: true, in_class: 'bounceInLeft',
                  out_class: 'bounceOutRight',},
                  type: "success",
                  hide: true,
                });
                $.post("ajax/get_kir.php", {
                  nev: nev_val
                },
                "json").done(function( response ) {
                  if (response != "error") {
                    var href = 'index.php?id='+response[1];
                    window.location.href = href;
                  }
                });
              } else {
                new PNotify({
                    title: 'Hiba',
                    text: 'Serverhibát találtam: '+ response,
                    animate: { animate: true, in_class: 'bounceInLeft',
                    out_class: 'bounceOutRight',},
                    type: "error",
                    hide: true,
                  });
                }
              });
            } else {
              var href = 'index.php?id='+id;
              window.location.href = href;
            }
          }
          setInterval(function() { get_kir(); }, 1000);
            function get_kir() {
              neve = $('#nev option:selected').val();
              $.post("ajax/get_kir.php", {
                nev: neve
              },
              "json").done(function( response ) {
                if (response != "error") {
                  if (response[0] != null) {

                  $('#kir').val(response[0]);
                   $('#kir').trigger("chosen:updated");
                  $('#id').attr('value', response[1]);
                }
                }
              });
            }
          </script>
          <script type="text/javascript">
            $(".chosen-select").chosen({width:"100%"});
            $('.chosen-select').val('Válassz');
            $(".chosen-select").trigger("chosen:updated");

          </script>
          <p></p>
        </div>
  </body>
</html>
