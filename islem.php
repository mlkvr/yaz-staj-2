<?php 
ob_start();
session_start();

include 'baglan.php';

// bir dosya ya da dizinin boş olup olmadığını kontrol eder
if (isset($_POST['admingiris'])) {
  $admin_mail=$_POST['admin_mail'];
  $admin_password=md5($_POST['admin_password']);

$adminsor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_sifre=:password"); // database kancası sağlar
$adminsor->execute(array(
  'mail'=>$admin_mail,
  'password'=>$admin_password
  ));

echo  $saydir=$adminsor->rowCount();

if ($saydir==1) {

  $_SESSION['admin_mail']=$admin_mail;
  header("Location:index.php");
  exit;
}
else 
{
   header("Location:login.php?durum=basarisiz");
   echo "Yetkisiz Giriş Yapmaya Çalışıyorsunuz !";
   exit;
}
}

  }

}


?>