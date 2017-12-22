<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '../config/db.php';

$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);
 $neve = $_POST['nev'];
 $nev = mysqli_real_escape_string($server, $neve);
 $tipus = $_POST['tipus'];
 $adatok = $_POST['adatok'];
 $emailcim = $_POST['email'];
 $adatok = json_encode($adatok);

$q = "INSERT INTO teszt (nev, tipus, adatok) VALUES ('{$nev}','{$tipus}','{$adatok}')";
 $sq = mysqli_query($server,$q);
 $json  = array();
 if ($sq) {

   // itt ki kell valogatni a szoveget
   $q = "SELECT * FROM teszt WHERE nev = '{$nev}' AND tipus = '{$tipus}'";
    $sq = mysqli_query($server,$q);
    while ($sqa = mysqli_fetch_assoc($sq)) {
      $data = array($sqa['adatok']);
    }
    $adat = json_decode($data[0]);

   switch ($tipus) {
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
   $w = "SELECT * FROM teszt_v WHERE tesz_nev = '{$tipus}' AND eredmeny = '{$v}'";
   $sw = mysqli_query($server, $w);
   while($swa = mysqli_fetch_assoc($sw)) {
     $ertekeles = $swa['text'];
   }
$count = 0;

if (!$sq) {
  echo json_encode( $server->error );
}

/* e-mail kuldes*/

if (!isset($emailcim)) {
   $emailcim = "zakany.balazs@viapangroup.com";
}

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$template = <<<TEMPLATE
<h3>Kedves $nev!</h3>
<p></p>
<p>A rendszerünkben kitöltötted a $tipus személyiségtesztet, melynek értékelése a következő:</p>
<p></p>
$ertekeles
<p></p>
<p>Üdvözlettel,</p>
<p>Viapangroup</p>
TEMPLATE;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.viapangroup.com';
$mail->Port = 2525;
$mail->SMTPAuth = false;
$mail->SMTPSecure = '';
$mail->SMTPAutoTLS = false;
$mail->Username = 'sender@viapangroup.com';
$mail->Password = '7kBd5ab8';

$mail->CharSet = 'UTF-8';
$mail->setFrom('myviapan@viapangroup.com','Viapangroup');
$mail->addAddress($emailcim, $nev);
$mail->Subject = 'Kitöltött teszt';
$mail->Body = $template;
$mail->IsHTML(true);
$mail->send();

 } else {
  $json = array($server->error);
 }
// header("Content-Type: text/json");
echo json_encode( $json );
 ?>
