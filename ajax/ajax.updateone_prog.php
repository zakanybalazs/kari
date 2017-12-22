<?php
require_once '../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
$table = 'vendegek';
$id = $_POST['id'];
$name = $_POST['name'];
$value = $_POST['value'];

$k = explode("_",$value);
$szam = $k[1];

$names = array('a','b','c','d','e');
for ($i=0; $i < 5; $i++) {
  if ($name != $names[$i]) {
      $index = $names[$i]."_".$szam;
      $q = "UPDATE {$table} SET {$names[$i]} = NULL WHERE nev_id = '{$id}' AND {$names[$i]} = '{$index}'";
      $sq = mysqli_query($server,$q);
  }
}

$q = "UPDATE {$table} SET {$name} = '{$value}' WHERE nev_id = '{$id}'";
$sq = mysqli_query($server,$q);
$json  = array();
if ($sq) {
  $json = array('ok');
} else {
  $json = array($server->error);
}


header("Content-Type: text/json");
echo json_encode(array( $json ));
 ?>
