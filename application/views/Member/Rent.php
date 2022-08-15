<?php $this->load->view('templates/User/Header_member'); ?>

<!-- Main Content -->
<div class="feturedsection">
	<h1 class="text-center mt-3"><span class="bdots">PAYMENT</span></h1>
</div>

<div class="text-center">
	<center>
		<?php $this->session->flashdata('rent') ?>
		<form action="<?= $aksi; ?>" method="POST" enctype="multipart/form-data">

			<input type="hidden" name="rent_id" value="<?= $rent_id; ?>">
			<input type="hidden" name="id_room" value="<?= $id_room; ?>">
			<input type="hidden" name="id_member" value="<?= $id_member; ?>">

			<div class="col-lg-3 text-left">
				<label style="font-size:large"><b>Rek Number: 5600078906785</b></label>
				<div class="form-group">
					<label for="date">Payment date</label>
					<input type="date" class="form-control" name="date" placeholder="--date/Month/Year--">
				</div>

				<div class="form-group">
					<label for="nominal">Cost</label>
					<input type="text" class="form-control" name="nominal" placeholder="Nominal">
				</div>

				<div class="form-group">
					<label for="status">Payment proof</label>
					<input type="file" name="filefoto" class="form-control" placeholder="Payment proof">
				</div>
				<button type="submit" class="btn btn-success btn-block" value="OK"><?= $button; ?> </button>
			</div>
		</form>
	</center>
</div>
</div>
</div>
<br>
<br>
<br>

<!-- End of main content -->

<?php $this->load->view('templates/User/Footer'); ?>