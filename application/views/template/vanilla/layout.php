<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo APPLICATION_NAME; ?> - <?php echo APPLICATION_DESCRIPTION; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/bootstrap.min.css'); ?>" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/fonts/line-icons.css'); ?>">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/slicknav.css'); ?>">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/owl.theme.css'); ?>">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/slick.css'); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/slick-theme.css'); ?>" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/animate.css'); ?>">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/main.css'); ?>">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo template_url('vanilla','assets/css/responsive.css'); ?>">
    <style>
      .append-group-text
      {
          border-top-right-radius:25px;
          border-bottom-right-radius:25px;
          border:1px solid #abacae;
      }
    </style>
  </head>
  <body>

    <?php $this->load->view('template/vanilla/components/header.php'); ?>
    <?php //$this->load->view('template/vanilla/components/service.php'); ?>
    <?php $this->load->view('template/vanilla/components/feature.php'); ?>
    <?php $this->load->view('template/vanilla/components/team.php'); ?>
    <?php $this->load->view('template/vanilla/components/clients.php'); ?>
    <?php $this->load->view('template/vanilla/components/testimonial.php'); ?>
    <?php $this->load->view('template/vanilla/components/pricing.php'); ?>
    <?php //$this->load->view('template/vanilla/components/product_carousel.php'); ?>
    <?php $this->load->view('template/vanilla/components/subscribers.php'); ?>
    <?php $this->load->view('template/vanilla/components/contact.php'); ?>
    <?php //$this->load->view('template/vanilla/components/map.php'); ?>
	  <?php $this->load->view('template/vanilla/components/footer.php'); ?>
    <?php $this->load->view('template/vanilla/components/copyrights.php'); ?>
    <?php $this->load->view('template/vanilla/components/back_to_top.php'); ?>
    <?php $this->load->view('template/vanilla/components/preloader.php'); ?>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo template_url('vanilla','assets/js/jquery-min.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/slick.min.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/wow.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/jquery.nav.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/scrolling-nav.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/jquery.slicknav.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/main.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/form-validator.min.js'); ?>"></script>
    <script src="<?php echo template_url('vanilla','assets/js/contact-form-script.min.js'); ?>"></script>
   
  </body>
</html>
