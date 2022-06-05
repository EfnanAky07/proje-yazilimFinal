<?php

  require_once '../../baglanti.php';




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>MEDIA PICTURES | GNR YAZILIM</title>

  <!-- Bootstrap -->
  <link rel="shortcut icon" href="../settings.png" type="image/x-icon">
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col mt-4">
        <div class="left_col scroll-view">


          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="../software-engineer.png  " alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">


                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">

                    <li><a href="media_gallery.php">Media Gallery</a></li>


                  </ul>
                </li>




              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="../logout.php">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                  data-toggle="dropdown" aria-expanded="false">
                  <img src="../software-engineer.png " alt="">John Doe
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>



                </div>
              </li>


            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3> Media Gallery </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Haberler  <small> Haber Design </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="mx-4"> <button type="button" class="btn btn-success btn-sm border-none"><a
                          href="form.php" class="text-white"><i class="fas fa-images fa-lg px-3"></i> Ekle</a></button>
                    </li>


                  </ul>
                  <div class="clearfix"></div>

                </div>
                <div class="x_content">
                  <div class="row">
                    <?php
                        $bilgilerimsor=$db->prepare("SELECT*from gundem_post ORDER BY tarih DESC ");
                        $bilgilerimsor->execute();

                        $say=0;
                        while ($bilgilerimscek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {?>

                    <div class="col-md-55">
                      <div class="thumbnail">
                        <div class="image view view-first">
                          <img src="../../<?php echo $bilgilerimscek['resim'] ?>" class="w-100" height="120"
                            alt="image" />
                          <div class="mask">
                            <p><?php echo substr($bilgilerimscek['baslik'],0,25)  ?></p>
                            <div class="tools tools-bottom">
                              <a
                                href="../../baglanti/delete.php?post_id=<?php echo $bilgilerimscek['post_id']?>&post_Sil=ok"><i
                                  class="fa fa-times"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="caption">
                          <p><?php echo $bilgilerimscek['icerik'] ?></p>
                        </div>
                      </div>
                    </div>


                    <?php } ?>



                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2> <strong>Slider Gallery</strong> <small> Slider Design </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="mx-4"> <button type="button" class="btn btn-success btn-sm border-none"><a
                          href="form.php" class="text-white"><i class="fas fa-images fa-lg px-3"></i> Ekle</a></button>
                    </li>


                  </ul>
                  <div class="clearfix"></div>

                </div>
                <div class="x_content">
                  <div class="row">
                    <?php
                    $bilgilerimsor=$db->prepare("SELECT*from slider_post ORDER BY tarih DESC ");
                    $bilgilerimsor->execute();

                    $say=0;
                    while ($bilgilerimscek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {?>

                    <div class="col-md-55">
                      <div class="thumbnail">
                        <div class="image view view-first">
                          <img src="../../<?php echo $bilgilerimscek['resim'] ?>" class="w-100" height="120"
                            alt="image" />
                          <div class="mask">
                            <p><?php echo substr($bilgilerimscek['baslik'],0,25)  ?></p>
                            <div class="tools tools-bottom">
                              <a
                                href="../../baglanti/delete.php?post_id=<?php echo $bilgilerimscek['post_id']?>&post_Sil=ok"><i
                                  class="fa fa-times"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="caption">
                          <p><?php echo $bilgilerimscek['haberkonu'] ?></p>
                        </div>
                      </div>
                    </div>


                    <?php } ?>



                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>