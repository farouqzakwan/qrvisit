<div class="modal" tabindex="-1" role="dialog" id="mdl-register">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		<form action="<?php echo register_url('create_new_account'); ?>" method="post">
			<div class="modal-body">
				<?php if(!empty($this->session->flashdata('error_message') && !empty($this->session->flashdata('register_error')))): ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $this->session->flashdata('error_message'); ?>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-12 pb-3">
					<h5 class="modal-title">Create your QRVisit Account</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<label>First Name</label>
						<input type="text" class="form-control form-control-sm" name="first_name" value="<?php echo (!empty($this->session->flashdata('first_name')))?$this->session->flashdata('first_name'):'';?>" required>
					</div>
					<div class="col-12 col-md-6">
						<label>Last Name</label>
						<input type="text" class="form-control form-control-sm" name="last_name" value="<?php echo (!empty($this->session->flashdata('last_name')))?$this->session->flashdata('last_name'):''; ?>" required>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<label>Email</label>
						<input type="email" class="form-control form-control-sm" name="email" value="<?php echo (!empty($this->session->flashdata('email')))?$this->session->flashdata('email'):''; ?>" required>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-6">
						<label>Password</label>
						<input type="password" class="form-control form-control-sm" name="password" required>
					</div>
					<div class="col-12 col-sm-6">
						<label>Confirmation Password</label>
						<input type="password" class="form-control form-control-sm" name="confirmation_password" required>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-sm">Save changes</button>
			</div>	
	  	</form>
    </div>
  </div>
</div>