<?php
require_once '../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
 $nev = $_POST['nev'];
 $nev = mysqli_real_escape_string($server, $nev);
 $teszt = $_POST['teszt'];

$q = "SELECT * FROM teszt WHERE nev = '{$nev}' AND tipus = '{$teszt}'";
 $sq = mysqli_query($server,$q);
 while ($sqa = mysqli_fetch_assoc($sq)) {
   $data = array($sqa['adatok']);
 }
 $adat = json_decode($data[0]);

switch ($teszt) {
  case 'Florence':
    $adat = $adat[41];
    $m = 0;
    if ($m < $adat -> a) {
      $m = $adat -> a;
      $v = 'a';
    }
    if ($m < $adat -> b) {
      $m = $adat -> b;
      $v = 'b';
    }
    if ($m < $adat -> c) {
      $m = $adat -> c;
      $v = 'c';
    }
    if ($m < $adat -> d) {
      $m = $adat -> d;
      $v = 'd';
    }
    break;
  case 'Belbin';
    $m = 0;
    if ($m < $adat[0] -> VA) {
      $m = $adat[0] -> VA;
      $v = 'VA';
    }
    if ($m < $adat[0] -> EL) {
      $m = $adat[0] -> EL;
      $v = 'EL';
    }
    if ($m < $adat[0] -> SE) {
      $m = $adat[0] -> SE;
      $v = 'SE';
    }
    if ($m < $adat[0] -> OGY) {
      $m = $adat[0] -> OGY;
      $v = 'OGY';
    }
    if ($m < $adat[0] -> FO) {
      $m = $adat[0] -> FO;
      $v = 'FO';
    }
    if ($m < $adat[0] -> HE) {
      $m = $adat[0] -> HE;
      $v = 'HE';
    }
    if ($m < $adat[0] -> CS) {
      $m = $adat[0] -> CS;
      $v = 'CS';
    }
    if ($m < $adat[0] -> ME) {
      $m = $adat[0] -> ME;
      $v = 'ME';
    }
    break;
  case 'diszk':
    $m = 0;
    if ($m < $adat -> D) {
      $m = $adat -> D;
      $v = 'D';
    }
    if ($m < $adat -> I) {
      $m = $adat -> I;
      $v = 'I';
    }
    if ($m < $adat -> Sz) {
      $m = $adat -> Sz;
      $v = 'Sz';
    }
    if ($m < $adat -> K) {
      $m = $adat -> K;
      $v = 'K';
    }
    break;
  default:
    $v = null;
    $text = null;
    break;
}
$W = mysqli_real_escape_string($server, $v);
$w = "SELECT * FROM teszt_v WHERE tesz_nev = '{$teszt}' AND eredmeny = '{$v}'";
$sw = mysqli_query($server, $w);
while($swa = mysqli_fetch_assoc($sw)) {
  $text = $swa['text'];
}

$json = array();
$json[0] = $adat;
$json[1] = $text;
$json[2] = $teszt;

header("Content-Type: text/json");
echo json_encode( $json );
 ?>
