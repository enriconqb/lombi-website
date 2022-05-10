<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->renderSection('title'); ?>
  
  <!-- FAVICON -->
  <link href="<?= base_url();  ?>/img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url();  ?>/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url();  ?>/plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="<?= base_url();  ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="<?= base_url();  ?>/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="<?= base_url();  ?>/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="<?= base_url();  ?>/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="<?= base_url();  ?>/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="<?= base_url();  ?>/css/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="<?= base_url();  ?>/images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url();  ?>/index.html">Beranda</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Kategori<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="<?= base_url();  ?>/dashboard.html">Dashboard</a>
									<a class="dropdown-item" href="<?= base_url();  ?>/dashboard-my-ads.html">Dashboard My Ads</a>
									<a class="dropdown-item" href="<?= base_url();  ?>/dashboard-favourite-ads.html">Dashboard Favourite Ads</a>
									<a class="dropdown-item" href="<?= base_url();  ?>/dashboard-archived-ads.html">Dashboard Archived Ads</a>
									<a class="dropdown-item" href="<?= base_url();  ?>/dashboard-pending-ads.html">Dashboard Pending Ads</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url();  ?>/tentang">Tentang Kami</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url();  ?>/index.html">Hubungi Kami</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="<?= base_url();  ?>">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="<?= base_url();  ?>/daftar"> Register</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<?= $this->renderSection('content'); ?>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm bg-info">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="<?= base_url();  ?>/images/logo-footer.png" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="<?= base_url();  ?>/category.html">Category</a></li>
            <li><a href="<?= base_url();  ?>/single.html">Single Page</a></li>
            <li><a href="<?= base_url();  ?>/store.html">Store Single</a></li>
            <li><a href="<?= base_url();  ?>/single-blog.html">Single Post</a>
            </li>
            <li><a href="<?= base_url();  ?>/blog.html">Blog</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-7">
          <img src="<?= base_url();  ?>/images/peta.png" alt="" class="float-right w-100">
      </div>
    </div>
    
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, Designed and Developed by <a class="font-weight-bold">HeheTech</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="<?= base_url();  ?>/plugins/jQuery/jquery.min.js"></script>
<script src="<?= base_url();  ?>/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= base_url();  ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url();  ?>/plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="<?= base_url();  ?>/plugins/tether/js/tether.min.js"></script>
<script src="<?= base_url();  ?>/plugins/raty/jquery.raty-fa.js"></script>
<script src="<?= base_url();  ?>/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="<?= base_url();  ?>/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url();  ?>/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?= base_url();  ?>/plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="<?= base_url();  ?>/plugins/google-map/gmap.js"></script>
<script src="<?= base_url();  ?>/js/script.js"></script>

</body>

</html>