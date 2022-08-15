<?php $this->load->view('templates/Admin/Header'); ?>

<!-- Main Content -->
<div id="page-wrapper">
	<div class="row ml-2">
		<h2 class="page-header mt-2 mb-4" style="margin-left: 590px;">Payment Confirmation</h2>
	</div>
	<?php $this->session->flashdata('rent') ?>
	<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
		<div class="col-lg-3" style="margin-left: 570px; margin-bottom:20px; border-style: solid; border-width: 5px 5px; border-radius: 20px; border-color: #28a745">
			<div class="form-group">
				<label>Month</label><br>
				<input type="text" name="month" class="form-control" value="<?php echo $month; ?>">
			</div>

			<div class="form-group">
				<label>Payment Status</label><br>
				<input type="radio" name="status" value="Payed Off"> Payed Off <br>
				<input type="radio" name="status" value="Not Payed"> Not Payed
			</div>
			<input type="hidden" name="rent_id" value="<?php echo $rent_id; ?>">

			<button class="btn btn-success mb-3" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('rent') ?>" class="btn btn-default mb-3">Cancel</a>
		</div>
	</form>
</div>
</div>
<!-- End of main content -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php $this->load->view('templates/Admin/Footer'); ?>