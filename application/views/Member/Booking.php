<?php $this->load->view('templates/User/Header_member'); ?>

<!-- Main Content  -->
<<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">Booking Room</span></h1>
	</div>
	</div>
	<center>
		<form action="<?= $aksi; ?>" method="POST">

			<input type="hidden" name="book_id" value="<?= $book_id; ?>">
			<input type="hidden" name="id_room" value="<?= $id_room; ?>">
			<input type="hidden" name="id_member" value="<?= $id_member; ?>">

			<div class="col-lg-3 text-left">
				<div class="form-group">
					<label for="tanggal_mulai">Start date</label>
					<input type="date" class="form-control" name="start_date" placeholder="Firt date rent">
				</div>

				<div class="form-group">
					<label for="durasi">Duration per month</label><br>
					<input type="radio" name="duration" value="1 Month"> 1 month &nbsp;
					<input type="radio" name="duration" value="3 Month"> 3 month &nbsp;
					<input type="radio" name="duration" value="6 Month"> 6 month
				</div>
				<br>
				<button type="submit" class="btn btn-primary btn-block" value="BOOK"><?= $button; ?></button>
			</div>
		</form>
	</center>
	</div>
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
	<?php $this->load->view('templates/User/Footer'); ?>