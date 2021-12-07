<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OfisERP Yazılımı">
    <meta name="keywords" content="Ofiserp">
    <meta name="author" content="matgis">
    <link rel="icon" href="<?=SITE_TEMPLATE_YONETIM?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_YONETIM?>/assets/images/favicon.png" type="image/x-icon">
    <title>OfisERP Giriş Alanı</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_YONETIM?>/assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?=SITE_TEMPLATE_YONETIM?>/assets/images/login/2.jpg" alt="looginpage"></div>
          <div class="col-xl-5 p-0">
            <div class="login-card">      
              <form class="theme-form login-form"  action="<?php echo SITE_URL; ?>/yonetici/giriskontrolu" method="post">
                <h4>Giriş Alanı</h4>
                <h6>Girşi</h6>
                <div class="form-group">
                  <label>Kullanıcı Adı</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input type="text" class="form-control" id="username" name="kullaniciAdi" placeholder="Kullanıcı Adı" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label>Şifre</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input type="password" class="form-control" id="userpassword" name="kullaniciSifre" placeholder="Şifre Alanı" required>
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Beni Hatırla</label>
                  </div><a class="link" href="<?php echo SITE_URL; ?>/user/resetpassword/" title="Şifre Gönder">Şifremi Unuttum?</a>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Giriş Yap</button>
                </div>
                <div class="login-social-title">                
                  <h5>Sosyal Medya Hesaplarımız</h5>
                </div>
                <div class="form-group">
                  <ul class="login-social">
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram"></i></a></li>
                  </ul>
                </div>
                <p>Daha hesabınız yok mu?<a class="ms-2" href="<?=SITE_URL?>/">Hemen Başvur</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/sidebar-menu.js"></script>
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/bootstrap/popper.min.js"></script>
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?=SITE_TEMPLATE_YONETIM?>/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>