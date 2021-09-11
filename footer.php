
   <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center mb-5">
                        <h4 class="text-uppercase mb-0">İletişime Geç</h4>
                        <div class="my-3">
                            <img src="images/title-border.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <b style="color: blue" ><?php echo $ayarcek['ayar_sitetitle'] ; ?></b>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-address">
                        <h4 class="title mb-4">Bizimle İletişime Geçin</h4>
                        <p class="text-muted f-15"><?php echo $ayarcek['ayar_sitemesai'] ; ?></p>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-address">
                                <h5 class="title f-18">Adres</h5>
                                <p class="text-muted f-15"><?php echo $ayarcek['ayar_siteil'] ; ?></p>
                                <p class="text-muted f-15"><?php echo $ayarcek['ayar_siteadres'] ; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-address">
                                <h5 class="title f-18">İletişim</h5>
                                <p class="text-muted f-15"><p  style="color: black" class="text-muted f-15"><?php echo $ayarcek['ayar_sitetel'] ; ?></p></p>
                                <p class="text-muted f-15"><p  style="color: black" class="text-muted f-15"><?php echo $ayarcek['ayar_sitegsm'] ; ?></p></p>
                                <p class="text-muted f-15"><p  style="color: black" class="text-muted f-15"><?php echo $ayarcek['ayar_sitefaks'] ; ?></p></p>
                                <p class="text-muted f-15"><p  style="color: black" class="text-muted f-15"><?php echo $ayarcek['ayar_sitemail'] ; ?></p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="custom-form mt-4 mt-lg-0">
                        <div id="message"></div>
                        <form method="POST" action="iletisimgonder.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label for="name">Adınız</label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Adınız">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label for="email">E-Posta Adresiniz</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="E-Posta..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label for="subject">Konu</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Konu giriniz.." />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label for="comments">Mesajınız</label>
                                        <textarea name="comments" id="comments" rows="3" class="form-control" name="comments" placeholder="Mesajınız.."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="gonder" class="btn btn-primary"> <i class="mdi mdi-telegram ml-2"></i></button>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Start -->
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