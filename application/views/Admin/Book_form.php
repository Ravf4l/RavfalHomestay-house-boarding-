<?php $this->load->view('templates/Admin/Header'); ?>
<div id="page-wrapper">
	<div class="row">
		<h2 class="page-header mt-4 mb-4" style="margin-left: 630px;"><?php echo $button; ?> Booking info</h2>
	</div>
	<div class="row">
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="col-lg-8" style="margin-left: 500px; margin-bottom:20px; border-style: solid; border-width: 5px 5px; border-radius: 20px; border-color: blue">
				<div class="form-group">
					<label>Start Date</label>
					<input type="date" name="tanggal_mulai" class="form-control" value="<?php echo $start_date; ?>">
				</div>
				<div class="form-group">
					<label>Duration</label><br>
					<input type="radio" name="duration" value="1 Month"> 1 Month &nbsp;
					<input type="radio" name="duration" value="3 Month"> 3 Month &nbsp;
					<input type="radio" name="duration" value="6 Month"> 6 Month
				</div>
				<input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
				<button class="btn btn-primary mb-3" type="submit"><?php echo $button; ?></button>
				<a href="<?php echo site_url('Book') ?>" class="btn btn-default mb-3">Cancel</a>
			</div>
		</form>
	</div>
</div>
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
<br>
<br>
<?php $this->load->view('templates/Admin/Footer'); ?>