<?php  include 'header.php'; ?>

    <!-- Giriş başlangıcı -->
    <section class="hero-1-bg position-relative d-flex align-items-center" style="background: url(images/main-bg.png)" id="home">
        <div class="container">
            <div class="row align-items-center">
               
                    <div id="search_box">
                        <form method="post"action="get_results.php" onsubmit="return do_search();">>
							
							<input type="text" id="search_term" name="search_term" placeholder="Kitap veya yazar arayın" onkeyup="do_search();">
							 <img src="images/search.png">    
						</form>
					</div>
					<div class="col-lg-5 offset-lg-1">
                    <div class="mt-5 mt-lg-0">
                        <img src="images/kitap-bg.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>

                
            </div>
			<div id="result_div"></div>
        </div>
    </section>
    <!-- Giriş sonu -->

    <!-- Sayaç başlangıcı -->
    <Section class="section counter-bg">
        <div class="counter-bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center" id="counter">
                <div class="col-lg-3 col-md-6">
                    <div class="mb-4 mb-lg-0">
                        <h2 class="text-white mb-4">Sayılarla kütüphanemiz</h2>
                        <p class="f-15 text-white-70 mb-4"></p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box text-center px-4 py-5 mb-4 mb-lg-0">
                        <div class="text-white">
                            <img src="images/icon/kita.png" alt="" class="img-fluid mx-auto d-blok">
                            <h1 class="mb-2 mt-3"><span class="counter-value mt-4" data-count="10000">0</span>+</h1>
                            <p class="mb-0 text-white-70">Kitap</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box text-center px-4 py-5 mb-4 mb-lg-0">
                        <div class="text-white">
                            <img src="images/icon/yaza.png" alt="" class="img-fluid mx-auto d-blok">
                            <h1 class="mb-2 mt-3"><span class="counter-value mt-4" data-count="100">0</span>+</h1>
                            <p class="mb-0 text-white-70">Yazar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-box text-center px-4 py-5 mb-4 mb-lg-0">
                        <div class="text-white">
                            <img src="images/icon/ogrenci.png" alt="" class="img-fluid mx-auto d-blok">
                            <h1 class="mb-2 mt-3"><span class="counter-value mt-4" data-count="30000">0</span>+</h1>
                            <p class="mb-0 text-white-70">Öğrenci</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!-- Sayaç Sonu -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="mb-4">
                        <a href="layout-one-1.html"><img src="images/logo-light.png" alt="" class="logo-light" height="22" /></a>
                        <a href="layout-one-1.html"><img src="images/logo-dark.png" alt="" class="logo-dark" height="22" /></a>
                    </div>
                    <p class="footer-desc f-15"><?php  echo $ayarcek['ayar_sitedescription']; ?>.</p>
                    <ul class="footer-icons list-inline f-20 mt-4">
                        <li class="list-inline-item mr-3"><a href="<?php  echo $ayarcek['ayar_facebook']; ?>" class=""><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item mr-3"><a href="<?php  echo $ayarcek['ayar_twitter']; ?>" class=""><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item mr-3"><a href="<?php  echo $ayarcek['ayar_instagram']; ?>" class=""><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="<?php  echo $ayarcek['ayar_youtube']; ?>" class=""><i class="mdi mdi-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <br>
                <p class="text-center footer-alt my-3">Malik Utku Vur tarafından Staj projesi için hazırlanmıştır.2021.</p>
                    
                </div>
            </div>
           
        </div>
    </section>
    <!-- Footer End -->

    <!-- javascript -->
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