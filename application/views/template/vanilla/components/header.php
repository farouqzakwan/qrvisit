<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg scrolling-navbar indigo border-bottom">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                    <span class="icon-menu"></span>
                </button>
                <a href="<?php echo base_url(); ?>" class="navbar-brand text-uppercase py-3" style="z-index:999;">
                    <img src="<?php echo base_url('/assets/images/icons/favicon/icon.png'); ?>" alt="icon qrvisit" class="img img-fluid icon-size">  <span class="text-brand text-lowercase"><?php echo APPLICATION_NAME; ?></span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-left clearfix">
                
                    
                </ul>
                <div class="btn-sing float-right">
                    <?php if(!is_login()): ?>
                        <a class="btn btn-border" href="#" data-toggle="modal" data-target="#mdl-register">Register</a>
                    <?php else: ?>
                        <a href="<?php echo login_url('sign_out'); ?>" class="btn btn-border">Logout</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
            <?php if(!is_login()): ?>
            <li class="text-right">
                <a class="page_scroll" href="#" data-toggle="modal" data-target="#mdl-register">Register</a>
            </li>
            <?php else: ?>
            <li class="text-right">
                <a href="<?php echo login_url('sign_out'); ?>" class="page_scroll">Logout</a>
            </li>
            <?php endif; ?>
        </ul>
        <!-- Mobile Menu End -->
    </nav>
    <!-- Navbar End -->
</header>
<!-- Header Area wrapper End -->