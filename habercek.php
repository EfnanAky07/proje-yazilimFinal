<?php
 require_once 'baglanti.php';

    $bilgilerimsor=$db->prepare("SELECT * FROM gundem_post where post_id=:post_id");
    $bilgilerimsor->execute(array(
    'post_id' => $_GET['post_id']
    ));
    $bilgilerimscek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

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

        <div class=" container py-5">
            <div class="row">
                <div class="col-xl-9 p-5">

                    <h4 class="pt-5"> <strong><?php echo $bilgilerimscek['baslik'] ?></strong> </h4>
                    <img src="<?php echo $bilgilerimscek['resim'] ?>" class="img-fluid rounded w-100" alt="">
                    <code>
                        <p class="pt-2" style="text-align: justify;"> <?php echo $bilgilerimscek['icerik'] ?></p>
                    </code>




                </div>
                <div class="col-lg-3 p-5 d-none d-xl-block d-lg-block ">

                    <img src="https://images.hepsiburada.net/banners/s/0/454-806/marketingbillboard_20220121132826.png/format:webp"
                        class="img-fluid" alt="">
                    <img src="https://images.hepsiburada.net/banners/s/0/454-806/marketingbillboard_20220121132833.png/format:webp"
                        class="img-fluid my-2" alt="">


                    </button>
                </div>
            </div>


        </div>


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