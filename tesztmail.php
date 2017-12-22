<?php
require_once 'config/db.php';
$server = mysqli_connect($hostDB,$userDB,$passDB,$tableDB);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$template = <<<TEMPLATE
<div class="col-lg-6 col-md-6">
<h3>D</h3>
<h4>Erősségek</h4>
<p>Célkitűzés, Probléma-megoldás, Döntés</p>
<h4>Gyenge pontok</h4>
<p>Nem óvatos, hibák keresése, lerohanás</p>
<h4>Szükségletek</h4>
<p>Hatalom, Ellenőrzés, önrendelkezés</p>
<p></p>
</div>
TEMPLATE;
// $template = utf8_encode($template);

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
$mail->setFrom('kari@viapangroup.com','Viapangroup');
$mail->addAddress('zakany.balazs@viapangroup.com', 'Miserable Cunt');
$mail->Subject = 'DIE';
$mail->Body = $template;
$mail->IsHTML(true);

if (!$mail->Send()) {
 // echo $mail->ErrorInfo;
  } else {
  echo 'Sent';
}

header("Content-Type: text/json");

?>
