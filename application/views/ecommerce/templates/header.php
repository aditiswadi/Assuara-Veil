<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Assuara</title>
  <meta charset="UTF-8">
  <meta name="description" content=" Divisima | eCommerce Template">
  <meta name="keywords" content="divisima, eCommerce, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/flaticon.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/slicknav.min.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/jquery-ui.min.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/animate.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>/assets/ecommerce/css/style.css"/>


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">
            <!-- logo -->
            <a href="./index.html" class="site-logo">
              <img src="img/logo.png" alt="">
            </a>
          </div>
          <div class="col-xl-6 col-lg-5">
            <form class="header-search-form" method="post">
              <input type="text" placeholder="Cari produk ...." name="keyword">
              <button><i class="flaticon-search"></i></button>
            </form>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="user-panel">
              <div class="up-item">
                <i class="flaticon-profile"></i>
                <a href="<?= base_url('auth/index'); ?>">Sign In </a> or <i class="glyphicon glyphicon-plus-sign"></i> <a href="<?= base_url('auth/registration'); ?>">Create Account</a>
              </div>
              <div class="up-item">
                <div class="shopping-card">
                  <a href="<?= base_url(); ?>/keranjang/detail"><i class="flaticon-bag"></i></a>
                </div>
                <?php $keranjang = $this->cart->total_items(); ?><?= $keranjang; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu">
          <li><a href="<?= base_url() ?>ecommerce">Home</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Header section end -->