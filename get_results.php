
<?php
if(isset($_POST['search']))
{

$mysqli = new mysqli("localhost", "root", "", "seo");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

 $search_val=$_POST['search_term'];

$query = "select * from kitap where MATCH(kitap_adi,yazar_adi) AGAINST('+$search_val')";
$result = $mysqli->query($query);

while($row=mysqli_fetch_array($result))
 {
   if($row['alan_kisi']){echo "<li><span class='title'>".$row['kitap_adi']." - "."</span><span class='desc'>".$row['yazar_adi']."</span><br><span class='desc'>".$row['geriverilecek_tarih']." tarihinde geri verilecek "."</span></a></li>";}
   else{echo "<li><span class='title'>".$row['kitap_adi']." - "."</span><span class='desc'>".$row['yazar_adi']."</span><br><span class='desc'>"."Bu kitabı kütüphanemize gelip ödünç alabilirsiniz!"."</span></a></li>";}
 }



$result->close();
$mysqli->close();
}
?>

