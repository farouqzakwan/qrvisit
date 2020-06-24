<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="<?php echo base_url(''); ?>"><?php echo APPLICATION_NAME; ?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="<?php echo base_url(''); ?>"><?php echo APPLICATION_SHORTNAME; ?></a>
        </div>
        <ul class="sidebar-menu">

            <?php if(ENVIRONMENT == 'development'): ?>
                <!-- <li class="menu-header">Template <?php //echo ENVIRONMENT; ?> </li> -->
                <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-code"></i> <span>Template & Code</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo stisla_url(''); ?>">Getting Started</span></a></li>
                        <li><a class="nav-link" href="<?php echo stisla_url('forms'); ?>">Forms</a></li>
                        <li><a class="nav-link" href="<?php echo stisla_url('widgets'); ?>">Widgets</a></li>
                        <li><a class="nav-link" href="<?php echo stisla_url('utilities'); ?>">Utilities</a></li>
                        <li><a class="nav-link" href="<?php echo stisla_url('form_validations'); ?>">Form Validations</a></li>
                        <li><a class="nav-link" href="<?php echo stisla_url('cards'); ?>">Cards</a></li>
                        <li><a class="nav-link" href="<?php echo stisla_url('panels'); ?>">Panels</a></li>
                        <li><a class="nav-link" href="<?php echo stisla_url('buttons'); ?>">Buttons</a></li>
                    </ul>
                </li> -->

                <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split" target="_blank">
                    <i class="fas fa-rocket"></i> Documentation
                    </a>
                </div> -->
            <?php endif; ?>

            
            <!-- <li class="menu-header">Pages</li>s -->
            <!--             
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
                <ul class="dropdown-menu">
                    <li><a href="utilities-contact.html">Contact</a></li>
                    <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                    <li><a href="utilities-subscribe.html">Subscribe</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li> -->
        </ul>

        

    </aside>
</div>