<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">

        <?php 

                 
          if ($_GET['durum']=="exit") {?>
            <div class="alert alert-info text-center text-capitalize" role="alert">
          Çıkış Yapıldı 
          </div>

        <?php }?>
          <form action="../../baglanti/adminbaglanti.php" method="POST">
            <h1>Login Form</h1>
            <div>
              <input type="email" class="form-control" name="admin_mail" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="admin_sifre" placeholder="Password" required="" />
            </div>
            <div>
              <button type="submit" name="admin_oturum" class="btn btn-success rounded-pill w-50 d-block mx-auto">Giriş
                Yap</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <?php 

        
        
        
                if ($_GET['durum']=="ok") {?>
                  <div class="alert alert-info text-center text-capitalize" role="alert">
                Başarılı 
                 </div>



              <?php } elseif ($_GET['durum']=="no") {?>

                <div class="alert alert-danger text-center text-capitalize" role="alert">
              Kullanıcı Bulunamadı  <i class="fas fa-times fa-lg "></i>
              </div>

              <?php }?>

              <div class="clearfix"></div>
              <br />


            </div>
          </form>
        </section>
      </div>


    </div>
  </div>
</body>

</html>