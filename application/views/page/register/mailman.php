<div class="hero bg-primary" style="min-height:100vh;">
    <div class="row">
        <div class="col-12 col-sm-8 mx-auto p-5 bg-white-transparent my-sm-5 ">

            <h1 class="text-hero text-center">Please register before enter premises</h1>
            <hr class="hr-separator">


            <form action="" class="form-group">
                <h6 class="text-dark wow fadeInUp animated"><label>Email Address</label></h6>
                <input type="email" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>Visitor Name</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>Phone Number</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated">

                <h6 class="text-dark wow fadeInUp animated"><label>Body Temperature</label></h6>
                <input type="text" class="form-control form-control-sm wow fadeInUp animated">

                <div class="row">
                    <div class="col-12 col-sm-4">
                        <button class="btn btn-success btn-block">Submit</button>
                    </div>
                </div>
            </form>
        
            <?php $this->load->view('page/qr/illustration'); ?>


        </div>
    </div>
</div>