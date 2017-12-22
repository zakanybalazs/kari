<?php
require_once '../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
 $name = $_POST['name'];
 $num = $_POST['num'];
 $escape = array();
 $x = 0;
 $prog = $name."_".$num;
$q = "SELECT nevek, kirendeltseg FROM vendegek WHERE {$name} = '{$prog}'";
 $sq = mysqli_query($server,$q);
 while ($sqa = mysqli_fetch_assoc($sq)) {
   $nev = $sqa['nevek'];
   $kir = $sqa['kirendeltseg'];
   $escape[$x] = array('nev' => $nev, 'kir' => $kir);
   $x += 1;
 }

 $json  = array();
 if (!$sq) {
  $escape = array("error");
 }
header("Content-Type: text/json");
echo json_encode( $escape );
 ?>
