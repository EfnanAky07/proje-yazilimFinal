<?php
 require_once 'baglanti.php';
 require_once 'baglanti/seflink.php';


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wir/News : Habelerden Geri Kalama </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="dow_img/w (1).png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ticker-style.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <?php
    include 'menu-footer/menu.php';


    ?>

    <main>
        <div class="weekly2-news-area  weekly2-pading">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Hottest News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">


                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                <?php
                        $bilgilerimsor=$db->prepare("SELECT*from slider_post");
                            $bilgilerimsor->execute();

                    $say=0;
                    while ($bilgilerimscek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {$say++?>

                                <div class="weekly2-single">

                                    <div class="weekly2-img">
                                        <img src="<?php echo $bilgilerimscek['resim'] ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1"><?php echo $bilgilerimscek['haberkonu'] ?></span>
                                        <p><?php echo $bilgilerimscek['tarih'] ?></p>
                                        <h4><a href="<?php echo $bilgilerimscek['siteurl'] ?>"
                                                target="_blank"><?php echo $bilgilerimscek['baslik'] ?></a></h4>
                                    </div>
                                </div>
                                <?php } ?>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area Start -->


        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h3>Whats New</h3>
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    <?php
                                      $bilgilerimsor=$db->prepare("SELECT*from gundem_post where katagori=:katagori  ORDER BY tarih DESC ");
                                      $bilgilerimsor->execute(array(
                                         'katagori'=>'spor'
                                      ));

                                      
                                         while ($bilgilerimscek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){?>


                                        <div class="col-lg-4 ">
                                            <div class="single-what-news mb-100">

                                                <div class="what-img">

                                                    <img class=" mb-5" src="<?php echo $bilgilerimscek['resim'] ?>">
                                                </div>
                                                <div class="what-cap">

                                                <h6>
                                                    <a href="haber-<?=seo($bilgilerimscek["baslik"]).'-'.$bilgilerimscek["post_id"]?>" 
                                                        style="  color: #eb6b55 "
                                                        class="text-capitalize"><?php echo substr($bilgilerimscek['baslik'],0,47) ?>..
                                                    </a>
                                                </h6>
                                                    <span class="text-secondary"><?php echo $bilgilerimscek['tarih'] ?></span>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>

                            </div>
                        </div>




                    </div>
                    <div class="col-lg-3 pb-5 d-none d-xl-block">

                        <!-- BAŞLA: TRT Spor Sitene Ekle -->
                        <div
                            style="font: normal 11px Arial; width: 298px; border: solid 1px #ccc; background: #fff; border-radius: 3px; box-shadow: 1px 1px 3px #ccc;">
                        
                            <iframe frameborder="0" width="298" height="497"
                                src="https://www.trtspor.com.tr/puandurumu-ekle/?lig=1&renk=a&baslik=1&resimler=1&a=8"></iframe>
                            <div
                                style="text-align: center;line-height: 23px;border-top: solid 1px #ccc; color: #666; margin-top: 5px;box-shadow: 0 -1px 3px #ccc;">
                                <a style="text-decoration: none;color: #666; font: normal 11px Arial;"
                                    href="https://www.trtspor.com.tr/puandurumu_ekle.html" target="_blank">Ayrıntılı
                                    Puandurumu Tablosu</a>
                            </div>
                        </div>
                        <!-- BİTİŞ: TRT Spor Sitene Ekle -->




                        </button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php
        include 'menu-footer/footer.php';
    ?>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script language="javascript" src="http://in.sitekodlari.com/yazisecmeengeli.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./assets/js/jquery.ticker.js"></script>
    <script src="./assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <script language="javascript" src="http://ir.sitekodlari.com/sagtusengelleme1.js"></script>
    <script language="javascript" src="http://ir.sitekodlari.com/paylas8.js"></script>
</body>

</html>