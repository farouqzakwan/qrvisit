<div class="hero bg-primary">
    <div class="row">
        <div class="col-12 col-sm-8 mx-auto p-5 bg-white-transparent my-sm-5 ">

            <h1 class="text-hero text-center">Please register before enter premises</h1>
            <hr class="hr-separator">

            <form action="<?php echo base_url('register/save'); ?>" class="form-group">
                <h6 class="text-dark wow fadeInUp animated"><label>Email Address</label></h6>
                <input type="email" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>Employee Name</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>IC Number</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>Travel By Public Transport</label></h6>
                <input type="checkbox" name="public_transport" class="wow fadeInUp animated"> <span class="text-dark wow fadeInUp animated">Yes</span>
                <input type="checkbox" name="public_transport" class="wow fadeInUp animated"> <span class="text-dark wow fadeInUp animated">No</span>
                <br><br>

                <h6 class="text-dark wow fadeInUp animated"><label>Wearing Mask</label></h6>
                <input type="checkbox" name="wearing_mask" class="wow fadeInUp animated"> <span class="text-dark wow fadeInUp animated">Yes</span>
                <input type="checkbox" name="wearing_mask" class="wow fadeInUp animated"> <span class="text-dark wow fadeInUp animated">No</span>
                <br><br>

                <h6 class="text-dark wow fadeInUp animated"><label>Body Temperature</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>Cough / Fever / Not Feeling Well</label></h6>
                <input type="checkbox" name="wearing_mask" class="wow fadeInUp animated"> <span class="text-dark wow fadeInUp animated">Yes</span>
                <input type="checkbox" name="wearing_mask" class="wow fadeInUp animated"> <span class="text-dark wow fadeInUp animated">No</span>
                <br><br>

                <h6 class="text-dark wow fadeInUp animated"><label>Department</label></h6>
                <select name="" id="" class="form-control wow fadeInUp animated">
                    <option value="" class="form-control">IT</option>
                    <option value="" class="form-control">Second Department</option>
                </select>

                <h6 class="text-dark wow fadeInUp animated"><label>Time In</label></h6>
                <input type="time" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>Time Out</label></h6>
                <input type="time" class="form-control form-control-sm wow fadeInUp animated">
                
                <div class="row wow fadeInUp animated">
                    <div class="col-12 col-sm-4">
                        <input type="hidden" name="company_code" value="<?php echo $company_code; ?>">
                        <input type="hidden" name="type" value="<?php echo $type; ?>">
                        <button class="btn btn-success btn-block">Submit</button>
                    </div>
                </div>
            </form>

            <?php $this->load->view('page/qr/illustration'); ?>

        </div>
    </div>
</div>