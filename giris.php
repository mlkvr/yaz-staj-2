<?php  include 'header.php'; ?>

	<div class="foto">
  <img id="meulogo" src="images/different.png" alt="mersin_logo">
	</div>
  <div class="login">
  <div class="yazı">
  <h2>Mersin Üniversitesi</h2>
  <h3>Kütüphane daire başkanlığı</h3>
  </div>
  <div>
    <form action="islem.php" method="POST">
      <div class="login_content_form">              
       <!-- <input type="text" placeholder="Email"> -->
        <input type="email" name="admin_mail" value="" placeholder="Email" required />
      </div>
      <div class="login_content_form">           
        <!--<input type="password" placeholder="Password"> -->
        <input type="password" name="admin_password" value="" placeholder="Şifre" required />
      </div>
      <!--<button class="login_btn">Login</button>-->
      <input class="login_btn" type="submit" name="admingiris" value="Giriş" />
    </form>
  </div>

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
