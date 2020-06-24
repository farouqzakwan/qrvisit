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
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <style>
      .append-group-text
      {
          border-top-right-radius:25px;
          border-bottom-right-radius:25px;
          border:1px solid #abacae;
      }
      
      .bg-primary
      {
        background-color:#6777ef !important;
      }
      
      .text-primary{
        color:#6777ef !important;
      }
      
      .disinfect-cover
      {
          background: url(<?php echo base_url('/assets/images/illustrations/3605324.jpg'); ?>) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          color:#6777ef;
      }
      
      .bg-white-transparent
      {
        background-color: rgba(255, 255, 255, 0.8);
      }
      
      .icon-size
      {
          width:51px !important;
      }

      .text-brand
      {
        font-family: 'Caveat', cursive;
        font-size:1.2em;
      }

      .text-brand-lg
      {
        font-family: 'Caveat', cursive;
        font-size:2.5em;
      }

      .text-color-secondary
      {
        color:rgba(255, 248, 117,1);
      }

      .text-hero
      {
        font-family: 'Caveat', cursive;
        font-size:2em;
      }
      .login-navbar
      {
        height:50px;
      }
      
      .hr-separator
      {
        background-color:rgba(255, 248, 117,1);
        width:15%;
        height:5px;
        border-radius:25px;
        border-style:none;
      }

    </style>
    <?php if(!empty($template['stylesheets'])): ?>
        <?php foreach($template['stylesheets'] as $sheet): ?>
          <link rel="stylesheet" href="<?php echo base_url($sheet); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
  </head>
  <body>

    <?php $this->load->view('template/vanilla/components/header.php'); ?>
    
    <section class="bg-white" style="min-height:100vh;">
        <?php if(!empty($template['body'])): ?>
            <?php foreach($template['body'] as $body): ?>
                <?php $this->load->view($body,$data); ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
       
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
    <script src="<?php echo template_url('vanilla','modules/qrcodejs/qrcode.js'); ?>"></script>
    <?php if(!empty($template['javascripts'])): ?>
        <?php foreach($template['javascripts'] as $script): ?>
          <script src="<?php echo base_url($script); ?>"></script>
        <?php endforeach; ?>
    <?php else: ?>
    <?php endif; ?>
  </body>
</html>