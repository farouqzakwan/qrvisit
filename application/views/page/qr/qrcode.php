<style>
page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  /* margin-bottom: 0.5cm; */
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
</style>

<div class="row d-print-none">
    <div class="col-12 text-right">
    <button onclick="window.print();" class="btn btn-qr-primary float-right"><i class="lni lni-printer"></i></button>
    </div>
</div>


<page size="A4">
    
    <div class="row">
        <div class="col-12 mt-5">
            <h2 class="text-danger text-center">Please Scan before you enter the premises</h2>
        </div>
    </div>
    <div class="row p-5">
        <div class="mx-auto" style="min-height:40vh;">
            <div id="qrcode" width="100%"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h1 class="text-brand-lg text-primary"> 
                <img src="<?php echo base_url('/assets/images/icons/items/qr-code-scan.png'); ?>" alt="icon qrvisit" class="img img-fluid icon-size">  <span class="text-brand text-lowercase"><?php echo APPLICATION_NAME; ?></span>
            </h1>
            <p class="text-dark">
                Record your visitor and employee with QR Code.<br/>
                <?php echo APPLICATION_NAME; ?> is a safe and simple alternative to paper check in</p>
            <hr class="hr-separator">
        </div>
    </div>
    <?php $this->load->view('/page/qr/illustration'); ?>
</page>

<script>
    var qrurl = '<?php echo $qrurl; ?>';
</script>