<?php
require_once '../config/db.php';
 $server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);

 $json  = array();
 $q = "SELECT * FROM vendegek";
 $sq = mysqli_query($server,$q);
  $i = 0;
while ($sqa = mysqli_fetch_assoc($sq)) {
    if ($sqa['status'] == 1) {
      $nev = $sqa['nevek'];

      if ($sqa['a'] == 'a_1') {
      $a = '14:30';
    } elseif ($sqa['a'] == 'a_2') {
      $a = '15:30';
    } elseif ($sqa['a'] == 'a_3'){
      $a = '16:30';
    } else {
      $a = 'N/A';
    }
    if ($sqa['b'] == 'b_1') {
    $b = '14:30';
  } elseif ($sqa['b'] == 'b_2') {
    $b = '15:30';
  } elseif ($sqa['b'] == 'b_3'){
    $b = '16:30';
  } else {
    $b = 'N/A';
  }
  if ($sqa['c'] == 'c_1') {
  $c = '14:30';
} elseif ($sqa['c'] == 'c_2') {
  $c = '15:30';
} elseif ($sqa['c'] == 'c_3'){
  $c = '16:30';
} else {
  $c = 'N/A';
}
if ($sqa['d'] == 'd_1') {
$d = '14:30';
} elseif ($sqa['d'] == 'd_2') {
$d = '15:30';
} elseif ($sqa['d'] == 'd_3'){
$d = '16:30';
} else {
$d = 'N/A';
}
      $json[$i] = array('nev' => $nev,'a' => $a, 'b' => $b,'c' => $c, 'd' => $d, 'status' => 'active');
    } else {
      $nev = $sqa['nevek'];
      $a = $sqa['a'];
      $b = $sqa['b'];
      $c = $sqa['c'];
      $d = $sqa['d'];
      $json[$i] = array('nev' => $nev, 'status' => 'inactive');
    }
    $i += 1;
}

header("Content-Type: text/json");
echo json_encode( $json );
 ?>
