<style>
page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
</style>
<page size="A4" class="mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-brand-lg text-center text-primary">Scan before you enter</h2>
        </div>
    </div>
    <div class="row mb-5 p-5">
        <div class="col mx-auto" style="min-height:30vh;">
            <div id="qrcode" class="text-center w-100 border" width="100%"></div>
        </div>
    </div>
    <?php $this->load->view('/page/qr/illustration'); ?>
</page>

<script>
    var qrurl = '<?php echo $qrurl; ?>';
</script>