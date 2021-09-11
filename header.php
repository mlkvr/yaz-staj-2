<?php

include 'config.php';
ob_start();
session_start();
//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id"); // database kancası sağlar
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

if($_SESSION){
$hakkimizdasor=$db->prepare("SELECT * FROM kullanici inner join kitap on :mail=kitap.alan_kisi"); // database kancası sağlar
$hakkimizdasor->execute(array(
  'mail' => $_SESSION['admin_mail']
  ));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
}



?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <title><?php  echo $ayarcek['ayar_sitetitle']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php  echo $ayarcek['ayar_sitedescription']; ?>" />
    <meta name="keywords" content="<?php  echo $ayarcek['ayar_sitekeywords']; ?>" />
     <meta name="author" content="<?php  echo $ayarcek['ayar_siteauthor']; ?>">
    <meta content="Themesdesign" name="<?php  echo $ayarcek['ayar_siteauthor']; ?>" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="css/stylelogin.css">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function do_search()
{
 var search_term=$("#search_term").val();
 $.ajax
 ({
  type:'post',
  url:'get_results.php',
  data:{
   search:"search",
   search_term:search_term
  },
  success:function(response) 
  {
   document.getElementById("result_div").innerHTML=response;
  }
 });
 
 return false;
}
</script>
	
</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>
    </div>
   
    <!--Navbar Başlangıcı-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.php">
                <img src="images/logo-dark.png" alt="" class="" height="21">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
					<li>
                        <a href="" style="color:black"></a>
                    </li>
                    <li>
                        <a href="index.php" style="color:black" >Anasayfa</a>
                    </li>
					<li>
                        <a href="" style="color:black"></a>
                    </li>
					
                    <li>
                        <a href="kitap.php" style="color:black"  >Kitaplar</a>
                    </li>
                    <li>
                        <a href="iletisim.php" style="color:black"  >İletişim</a>
                    </li>
					<li>
                        <a href="" style="color:black"  ></a>
                    </li>
                    <li>
                        <?php if($_SESSION){
																$adminsor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail"); // database kancası sağlar
																$adminsor->execute(array(
																'mail' =>$_SESSION['admin_mail'] ));
																$admincek=$adminsor->fetch(PDO::FETCH_ASSOC);
																if ($adminsor->rowCount() > 0) {echo "<a href='kullanici.php' style='color:black' >",$admincek['kullanici_ad']," ",$admincek['kullanici_soyad'],"</a>";}
																}else{echo "<a href='giris.php' style='color:black' >Kullanıcı Girişi</a>";}
																 ?>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Sonu -->