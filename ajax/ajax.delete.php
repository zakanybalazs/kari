<?php
require_once '../config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
$table = $_POST['Ptable'];
$id = $_POST['Pid'];
$q = "DELETE FROM {$table} WHERE ID = '{$id}'";
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
