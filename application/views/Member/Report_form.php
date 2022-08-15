<?php $this->load->view('templates/User/Header_member'); ?>
<!-- Main Content -->

<div class="feturedsection">
	<h1 class="text-center mt-4"><span class="bdots"> Tell your room problem </span></h1>
</div>

<center>
	<form action="<?= $aksi; ?>" method="POST">
		<input type="hidden" name="report_id" value="<?= $report_id; ?>">
		<input type="hidden" name="id_room" value="<?= $id_room; ?>">
		<input type="hidden" name="id_member" value="<?= $id_member; ?>">

		<div class="col-lg-4 mb-1 text-left">
			<div class="form-group">
				<label for="perihal">About : &nbsp;</label>
				<input class="mr-2" type="radio" name="about" value="Water">Water &nbsp;
				<input class="mr-2" type="radio" name="about" value="Electric">Electricity &nbsp;
				<input class="mr-2" type="radio" name="about" value="Network">Wifi &nbsp;
				<input class="mr-2" type="radio" name="about" value="Lamp">Lamp &nbsp;
				<input class="mr-2" type="radio" name="about" value="Others">Others &nbsp;
			</div>

			<div class="form-group">
				<label for="content">Text</label><br>
				<textarea name="content" cols="60" rows="5"></textarea>
			</div>
			<button type="submit" class="btn btn-danger btn-block" value="OK"><?= $button; ?> </button>
		</div>
	</form>
</center>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- End of main content -->

<?php $this->load->view('templates/User/Footer'); ?>