<?php
require_once 'db.php';
class CreateTable
{
  public $table;
  public $query;
  public $ignore = array();
  public function CreateDataTableBody()
  {
    // $server = new Server
    // $server->server;
    $server = mysqli_connect("localhost","promothe_sqlu","B4l4Zs","tarsas");
    $beback = '';
        $strQ = 'DESCRIBE '.$this->table;
        $sstrQ = mysqli_query($server,$strQ);
        $data2 = $sstrQ->field_count; // getting how many columns it has
         // getting the field names

mysqli_close($server);
    $server = mysqli_connect("localhost","promothe_sqlu","B4l4Zs","tarsas");
    $q = $this->query;
    $sq = mysqli_query($server,$q);
    while ($data = mysqli_fetch_assoc($sq)) {

          while ($getColumns = mysqli_fetch_assoc($sstrQ)) {
              $field = $getColumns['Field'];
          $longstring = '<td> '.$data[$field].' </td>';
          $beback = $beback . $longstring;
        }
    }
    return $beback;
  }
}

 ?>
