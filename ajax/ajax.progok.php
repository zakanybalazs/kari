<?php
require_once '../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
 $id = $_POST['id'];
$q = "SELECT * FROM vendegek WHERE nev_id = '{$id}'";
 $sq = mysqli_query($server,$q);
 while ($sqa = mysqli_fetch_assoc($sq)) {
   $a = $sqa['a'];
   $b = $sqa['b'];
   $c = $sqa['c'];
   $d = $sqa['d'];
   $e = $sqa['e'];
 }
 $escape = array('a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'e' => $e);
 if (!$sq) {
  $escape = array($server->error);
 }
header("Content-Type: text/json");
echo json_encode( $escape );
 ?>
