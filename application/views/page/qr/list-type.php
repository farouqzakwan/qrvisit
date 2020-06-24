<section class="container content-container pt-5">
    <section class="jumbotron">
        <p>
            Click on group type to print your QR Code and display it infront of your business premises. 
        </p>
    </section>

    <div class="row mb-5">

        <div class="col-12 col-sm-4 mb-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <img src="<?php echo base_url('/assets/images/icons/items/employee.png'); ?>" class="img-fluid" style="max-width:32px;">
                        </div>
                        <div class="col-12 col-sm-10">
                            <a href="<?php echo qr_url('employee/'.$company_code); ?>" target="_blank" class="text-white">Employee / Staff / Worker</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-12 col-sm-6">
                            <h4 class="text-brand">Total visits</h4> 24
                        </div> -->
                        <div class="col-12 col-sm-6 mx-auto">
                            
                        <div class="row mb-5 p-1">
                            <div class="mx-auto">
                                <div id="qrcode-employee" width="100%"></div>
                            </div>
                        </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  text-center">
                            <a href="<?php echo qr_url('employee/'.$company_code); ?>" class="text-brand text-primary">Print QR Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 mb-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <img src="<?php echo base_url('/assets/images/icons/items/delivery.png'); ?>" class="img-fluid" style="max-width:32px;">
                        </div>
                        <div class="col-12 col-sm-10">
                            <a href="<?php echo qr_url('delivery/'.$company_code); ?>" target="_blank" class="text-white">Delivery / Mailman / Runner</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-12 col-sm-6">
                            <h4 class="text-brand">Total visits</h4> 24
                        </div> -->
                        <div class="col-12 col-sm-6 mx-auto">
                            
                        <div class="row mb-5 p-1">
                            <div class="mx-auto">
                                <div id="qrcode-delivery" width="100%"></div>
                            </div>
                        </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="<?php echo qr_url('delivery/'.$company_code); ?>" class="text-brand text-primary">Print QR Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 mb-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <img src="<?php echo base_url('/assets/images/icons/items/visitor.png'); ?>" class="img-fluid" style="max-width:32px;">
                        </div>
                        <div class="col-12 col-sm-10">
                            <a href="<?php echo qr_url('visitor/'.$company_code); ?>" target="_blank" class="text-white">Visitor / Guest / Customer</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-12 col-sm-6">
                            <h4 class="text-brand">Total visits</h4> 24
                        </div> -->
                        <div class="col-12 col-sm-6 mx-auto">
                            
                        <div class="row mb-5 p-1">
                            <div class="mx-auto">
                                <div id="qrcode-visitor" width="100%"></div>
                            </div>
                        </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="<?php echo qr_url('visitor/'.$company_code); ?>" class="text-brand text-primary">Print QR Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-12 text-center">
            <button class="btn-qr btn-qr-primary">
                Print All QR Code
            </button>
        </div>
    </div> -->

    <br><br>
    <?php $this->load->view('page/qr/illustration'); ?>
</section>
<script>
    var employee_url = '<?php echo $employee_url; ?>';
    var delivery_url = '<?php  echo $delivery_url; ?>';
    var visitor_url = '<?php echo $visitor_url; ?>';
</script>