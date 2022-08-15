<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row ml-2">
		<h2 class="page-header mt-2 mb-5" style="margin-left: 570px;">Update Tenant Data</h2>
	</div>
	<div class="row">
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">

			<div class="col-lg-10" style="margin-left: 470px; margin-bottom:20px; border-style: solid; border-width: 5px 5px; border-radius: 20px; border-color: blue">
				<div class="form-group">
					<label>Name </label>
					<input type="text" name="name" class="form-control" placeholder="Full name" required value="<?php echo $name; ?>">
				</div>

				<div class="form-group">
					<label>Password </label>
					<input type="password" name="password" class="form-control" placeholder="Password" required value="<?php echo $password; ?>" readonly>
				</div>

				<div class="form-group">
					<label>Email </label>
					<input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo $email; ?>">
				</div>

				<div class="form-group">
					<label>Gender</label>
					<input type="text" name="gender" class="form-control" placeholder="gender" required value="<?php echo $gender; ?>">
				</div>

				<div class="form-group">
					<label>Phonenumber</label>
					<input type="text" name="nohp" class="form-control" placeholder="Phonenumber" required value="<?php echo $nohp; ?>">
				</div>

				<div class="form-group">
					<label>Address </label>
					<input type="text" name="address" class="form-control" placeholder="Address" required value="<?php echo $address; ?>">
				</div>
				<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
				<button class="btn btn-primary mb-3" type="submit">Update</button>
				<a href="<?php echo site_url('Member/data_member') ?>" class="btn btn-default mb-3">Cancel</a>
		</form>
	</div>
</div>
</div>
</div>
<?php $this->load->view('templates/Admin/Footer'); ?>