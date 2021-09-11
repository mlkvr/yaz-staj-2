<?php include 'header.php'; ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$stmt = $db->prepare("SELECT kitap.geriverilecek_tarih FROM kitap inner join kullanici on kullanici_mail=kitap.alan_kisi");
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_COLUMN);

$stmt2 = $db->prepare("SELECT kullanici.kullanici_mail FROM kullanici inner join kitap on kullanici_mail=kitap.alan_kisi");
$stmt2->execute();
$array2 = $stmt2->fetchAll(PDO::FETCH_COLUMN);
print_r($array2);

foreach($array as $deger){
if($deger < date("Y-m-d")){
    

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
$mail->AddAddress($array2[0], "Degerli ogrencimiz");
$mail->SetFrom("stajprojetest@gmail.com", "MEU Kutuphane");

$mail->Subject = "Mersin Universitesi Kutuphanesi hatirlatma maili";
$content = "<b>Ödünç alma süreniz dolmuştur lütfen kitabı geri getiriniz.</b>";
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
}}


?>

<?php  include 'footer.php'; ?>