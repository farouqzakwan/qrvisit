<section class="container content-container">
<!-- 
	<div class="row">
		<div class="col-12 col-sm-4 pt-5">
			<div class="card">
				<div class="card-body rounded bg-primary text-white">
					<div class="row">
						<div class="col-12">
							<div style="position:absolute;background-color:orange;padding:10px;font-size:5em;border-radius:5px;right:0%;top:0%;margin:0 absolute;">
								<i class="lni lni-briefcase"></i>
							</div>
						</div>
						<div class="col-12">
							<p class="">
								<span style="font-size:5em;">0</span>
								companies
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-4 pt-5">
			<div class="card">
				<div class="card-body rounded bg-primary text-white">
					<div class="row">
						<div class="col-12">
							<div style="position:absolute;background-color:orange;padding:10px;font-size:5em;border-radius:5px;right:0%;top:0%;margin:0 absolute;">
								<i class="lni lni-briefcase"></i>
							</div>
						</div>
						<div class="col-12">
							<p class="">
								<span style="font-size:5em;">0</span>
								companies
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-4 pt-5">
			<div class="card">
				<div class="card-body rounded bg-primary text-white">
					<div class="row">
						<div class="col-12">
							<div style="position:absolute;background-color:orange;padding:10px;font-size:5em;border-radius:5px;right:0%;top:0%;margin:0 absolute;">
								<i class="lni lni-briefcase"></i>
							</div>
						</div>
						<div class="col-12">
							<p class="">
								<span style="font-size:5em;">0</span>
								companies
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="row">
		<div class="col-12 mt-5">

			<?php if(!empty($this->session->flashdata('error_message') && !empty($this->session->flashdata('operation_error')))): ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('error_message'); ?>
			</div>
			<?php endif; ?>

			
			<div class="row">
				<div class="col-12 mb-3 pb-3 text-right">
					<button class="btn-qr btn-qr-primary" data-toggle="modal" data-target="#mdl-add-company">
						<i class="lni lni-plus"></i>
					</button>
				</div>
			</div>

			<?php if(!empty($companies)): ?>
				<div class="row">
					<?php foreach($companies as $key => $company): ?>
						<div class="col-12 col-sm-6 mb-3">
							<div class="card h-100">
								
								<div class="card-body">


									<div class="row">
										<div class="col-12 col-sm-4">
											
											<h5 class="text-brand"><a href="<?php echo qr_url('index/'.$company->code); ?>" target="_blank"> <?php echo $company->name; ?></a></h5>
											<div class="row">	
												<div class="col-4 text-center mx-auto btn-qr-primary-alternate py-3 rounded-circle shadow">
													<a href="<?php echo qr_url('index/'.$company->code); ?>" target="_blank" >
														<img src="<?php echo base_url('assets/images/icons/items/qrcode.png'); ?>" class="img-fluid">
													</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-6">
											<i class="lni lni-briefcase pr-3"></i>  <?php echo $company->name; ?> <br>
											<i class="lni lni-phone pr-3"></i> <?php echo (!empty($company->phone_number))?$company->phone_number:'NA'; ?><br>
											<i class="lni lni-map-marker pr-3"></i>
											<?php echo (!empty($company->building_info))?$company->building_info.',':''; ?>
											<?php echo (!empty($company->street_address))?$company->street_address.',':''; ?>
											<?php echo (!empty($company->city))?$company->city.',':''; ?>
											<?php echo (!empty($company->postcode))?$company->postcode.',':''; ?>
											<?php echo (!empty($company->state))?$company->state:''; ?>
											<?php echo (empty($company->building_info) && empty($company->street_address) && empty($company->city) && empty($company->postcode) && empty($company->state))?'NA':''; ?>
											<h5 class="text-brand"><a href="<?php echo qr_url('index/'.$company->code); ?>" target="_blank">Get QR Code..</a></h5>

										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
					<?php else: ?>
				<div class="row">
					<div class="col-6 p-5 mx-auto">
						<img src="<?php echo base_url('assets/images/illustrations/phone_contact_tracing.png'); ?>" alt="" class="img img-fluid">
					</div>
				</div>
				<div class="row">
					<div class="col-12 mb-5 text-center">
						<h4 class="text-primary mt-3 text-brand-lg">Company List Empty</h4>
						<p class="text-brand">click on ..</p>
						<i class="lni lni-pointer-down"></i>
						<br>
						<button class="btn-qr btn-qr-primary" data-toggle="modal" data-target="#mdl-add-company">
							<i class="lni lni-plus"></i>
						</button>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</div>
</section>




<div class="modal" id="mdl-add-company">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-brand text-white">Add Company</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="<?php echo company_url('save'); ?>" method="post">

			<div class="modal-body">

				<div class="row">
					<div class="col-12 col-md-6 mb-1">
						<label>Name</label>
						<input type="text" class="form-control-qr" name="name" autocomplete="off" required>
					</div>

					<div class="col-12 col-md-6 mb-1">
						<label>Business Phone Number</label>
						<input type="text" class="form-control-qr" name="phone_number" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<div class="col-12 mb-1">
						<label>Building Info</label>
						<input type="text" class="form-control-qr" name="building_info" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-6 mb-1">
						<label>Street Address</label>
						<input type="text" class="form-control-qr" name="street_address" autocomplete="off">
					</div>
			
					<div class="col-12 col-md-6 mb-1">
						<label>City</label>	
						<input type="text" class="form-control-qr" name="city" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-6 mb-1">
						<label>Postcode</label>
						<input type="text" class="form-control-qr" name="postcode" autocomplete="off">
					</div>
			
					<div class="col-12 col-md-6 mb-1">
						<label>State</label>
						<input type="text" class="form-control-qr" name="state" autocomplete="off">
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn-qr " data-dismiss="modal">Close</button>
				<button type="submit" class="btn-qr btn-qr-primary px-3">Save changes</button>
			</div>


	  </form>
    </div>
  </div>
</div>