<?php
include_once 'config/header.php';
require_once 'config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
 ?>
<!DOCTYPE html>
  <body>
    <div class="container well">
      <h1 align="center">Viapan karácsonyi parti</h1>
      <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <p></p>
          <h3>Résztvevők hozzáadása:</h3>
          <label>Név</label>
          <input type="text" class="form-control" id="nev">
          <p></p>
          <label>Kirendeltség</label>
          <input type="text" class="form-control" id="kir">
          <p></p>
          <button onclick="feltolt()" class="btn btn-success" name="button">Mehet</button>
          <p></p>
          <p>vagy</p>
          <label>CSV feltöltése:</label>
          <input type="file" id="filecsoportos">
          <script type="text/javascript">
          document.getElementById('filecsoportos').onchange = function(){
          var arr = [];
          var file = this.files[0];
          var reader = new FileReader();
          reader.onload = function(progressEvent) {
            // Entire file

            // By lines
            var lines = this.result.split('\n');
            console.log(lines);
            console.log(lines.lenght)
            var i = 0;
            setTimeout(function(){
            while (lines) {
              var str = lines[i].replace(/\"/g, '');
              console.log(lines[i]);
              var str = str.split(';');
              var sor = str[0];
              var nev = str[1];
              var jel = str[2];
              var array = new Array({sor: sor, nev:nev, jel:jel});
              // var array = new Array({nevek: nev, kirendeltseg:kir});
            // console.log(str);

                $.post("ajax/ajax.insert.php", {
                  Ptable: 'diszk',
                  data: array,
                },
                "json");
              i += 1;
            }
          }, 120);

          };
          reader.readAsText(file);
        }
            function feltolt() {
              var nev_val = $('#nev').val();
              var kir = $('#kir').val();
              var array = new Array({nev: nev_val, kirendeltseg:kir});
              $.post("ajax/ajax.insert.php", {
                Ptable: 'nevek',
                data: array,
              },
              "json").done(function( response ) {
                if (response == "ok") {
                  var next = "<tr><td>"+nev_val+"</td><td>"+kir+"</td></tr>"
                  $('#tbody').append(next);
                }
              });
            }
          </script>
          <p></p>
        </div>
        <p></p>

        <div class="container">
          <p></p>
          <div class="well col col-lg-11 col-md-11 col-sm-11 col-xs-11">

          <table class="table table-hover table-striped">
            <thead>
              <th>Név</th>
              <th>Kirendeltség</th>
            </thead>
            <tbody id="tbody">
                <?php
                  $q = "SELECT * FROM nevek";
                  $sq = mysqli_query($server, $q);
                    while ($sqa = mysqli_fetch_assoc($sq)) {?>
                      <tr>
                        <td><?php echo $sqa['nev'] ?></td>
                        <td><?php echo $sqa['kirendeltseg'] ?></td>
                      </tr>
                <?php } ?>
            </tbody>
          </table>
         </div>
        </div>
    </div>
  </body>
</html>
