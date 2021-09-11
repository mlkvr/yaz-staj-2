 <?php include 'header.php'; ?>
 <h2 class="text-black mb-2 pt-3 mt-5 display-4 text-center">Tüm Kitaplar</h2>
<div class="container p-5 mt-5 border list-group"><?php
 $mysqli = new mysqli("localhost", "root", "", "seo");
$query = "select * from kitap";
$result = $mysqli->query($query);

while($row=mysqli_fetch_array($result))
 {
   echo "<li class='list-group-item'><span class='title'>".$row['kitap_adi']." - "."</span><span class='desc'>".$row['yazar_adi']."</span><br><span class='desc'>"."</span></a></li>";
 }
?></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <!-- COUNTER -->
    <script src="js/counter.int.js"></script>
    <!-- carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>

</body>
</html>