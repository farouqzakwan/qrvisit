<section class="hero bg-primary p-5">
    <h1 class="text-white text-brand text-center text-hero">Keep Track Your Visitor Easily With qrvisit</h1>
    <hr class="hr-separator">

    <div class="row mt-5">
        <div class="col-12 col-sm-4 mx-auto">
            <form action="<?php echo login_url('verify_login'); ?>" class="form-group" method="post">
                
                <?php if(!empty($this->session->flashdata('error_message')) && !empty($this->session->flashdata('login_error'))): ?>
                <div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('error_message'); ?>
				</div>
                <?php endif; ?>
                    <div class="row d-none d-sm-block">
                        <div class="col-12">
                            <label class="text-white"><strong> Email</strong></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 pt-2">
                            <span style="width:35px;border:1px solid #fff;padding:10px;border-radius:30px;">
                                 <img src="<?php echo template_url('vanilla','assets/img/icons/envelope-open-solid.svg'); ?>" alt="envelope" style="width:20px;">
                            </span>
                        </div>
                        <div class="col-11">
                            <input type="email" class="form-control" name="email" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="row d-none d-sm-block">
                        <div class="col-12">
                            <label class="text-white"><strong> Password</strong></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 pt-2">
                            <span style="width:35px;border:1px solid #fff;padding:10px;border-radius:30px;">
                                 <img src="<?php echo template_url('vanilla','assets/img/icons/lock-open-solid.svg'); ?>" alt="envelope" style="width:20px;">
                            </span>
                        </div>
                        <div class="col-11">
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>            
                    <button type="submit" class="btn btn-success btn-sm">Login</button>
            </form>
        </div>
    </div>
</section>