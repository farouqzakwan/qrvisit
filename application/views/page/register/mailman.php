<div class="hero bg-primary" style="min-height:100vh;">
    <div class="row">
        <div class="col-12 col-sm-8 mx-auto p-5 bg-white-transparent my-sm-5 ">

            <h1 class="text-hero text-center">Please register before enter premises</h1>
            <hr class="hr-separator">


            <?php if(!empty($this->session->flashdata('operation_error')) && !empty($this->session->flashdata('error_message'))): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error_message'); ?>
            </div>
            <?php endif; ?>

            <form action="<?php echo register_url('save_guest'); ?>" class="form-group" method="post">
                <h6 class="text-dark wow fadeInUp animated"><label>Email Address</label></h6>
                <input type="email" class="form-control form-control-sm wow fadeInUp animated" name="email">

                <h6 class="text-dark wow fadeInUp animated"><label>Visitor Name</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated" name="name" required>

                <h6 class="text-dark wow fadeInUp animated"><label>Phone Number</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated" name="phone_number" required>

                <h6 class="text-dark wow fadeInUp animated"><label>Body Temperature</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated" name="temperature" required>

                <input type="hidden" name="type" value="<?php echo GUEST_DELIVERY; ?>">
                <input type="hidden" name="company_code" value="<?php echo $company_code?>">

                <div class="row wow fadeInUp animated">
                    <div class="col-12 col-sm-4">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                </div>
            </form>
        
            <?php $this->load->view('page/qr/illustration'); ?>


        </div>
    </div>
</div>