<?php $this->load->view('templates/Admin/Header'); ?>

<!-- Main Content -->
<div id="page-wrapper">
	<div class="row ml-2">
		<h2 class="page-header mt-2 mb-4" style="margin-left: 630px;">Update Room</h2>
	</div>
	<div class="row">
		<?php $this->session->flashdata('message') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="col-lg-8" style="margin-left: 430px; margin-bottom:20px; border-style: solid; border-width: 5px 5px; border-radius: 20px; border-color: blue">
				<div class="form-group">
					<label>Room ID: </label>
					<input type="text" name="name" class="form-control" placeholder="Room ID" required value="<?php echo $name; ?>">
				</div>
				<div class="form-group">
					<label>Floor: </label>
					<input type="text" name="floor" class="form-control" placeholder="Room floor" required value="<?php echo $floor; ?>">
				</div>

				<div class="form-group">
					<label>Facility: </label><br />
					<textarea name="facility" cols="70" rows="5"><?php echo $facility; ?></textarea>
				</div>

				<div class="form-group">
					<label>Status: </label>
					<input type="text" name="stats" class="form-control" placeholder="Room status" required value="<?php echo $stats; ?>">
				</div>
				<div class="form-group">
					<label>Price: </label>
					<input type="text" name="cost" class="form-control" placeholder="Room price" required value="<?php echo $cost; ?>">
				</div>

				<input type="hidden" name="id_room" value="<?= $id_room; ?>">
				<button class="btn btn-primary mb-3" type="submit">Update</button>
				<a href="<?php echo site_url('room') ?>" class="btn btn-default mb-3">Cancel</a>
			</div>
		</form>
	</div>
</div>
</div>
<!-- End of main content -->

<?php $this->load->view('templates/Admin/Footer'); ?>