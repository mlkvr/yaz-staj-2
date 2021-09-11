<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Mailer = "smtp";
  $mail->SMTPDebug  = 2;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "stajprojetest@gmail.com";
  $mail->Password   = "Test123_";
  $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );
  $mail->IsHTML(true);
  $mail->AddAddress("stajprojetest@gmail.com", "Degerli yonetici");
  $mail->SetFrom($_POST['email'], "Iletisim Mesajı");
  $mail->Subject = "Mersin Universitesi Kutuphanesi iletişim maili";
  //$mail->Subject = $_POST['subject'];
  $content =   $_POST['comments'];
  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
 ?>