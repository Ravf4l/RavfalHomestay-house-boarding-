	<?php $this->load->view('templates/User/Header_member'); ?>

	<!-- Room Info Member -->
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">Room Info</span></h1>
		<h3 class="text-center">M (Male) | W (Female)</h3>
	</div>
	<div class="row firstrow">
		<?php foreach ($room as $key => $value) { ?>
			<div class="row">
				<div class="col-lg-auto">
					<div class="card ml-4 mt-3 mb-3" style="width: 17rem;">
						<div class="card-body ml-2">
							<h5 class="card-title"><?= $value->room_name; ?></h5>
							<h6 class="card-subtitle mb-2 text-muted">Floor <?= $value->floor; ?></h6>
							<p class="card-text"><b>Facility</b> <br><?= $value->facility; ?></p>
							<p class="card-text">Status <b><?= $value->stats; ?></b></p>
							<p class="card-text"><b>Price</b> Rp.<?= number_format($value->cost); ?></h2>
							</p>
							<a href="<?php echo base_url() . "Book/booking/" . $value->id_room ?>" class="btn btn-primary">Book</a>
							<a href="<?php echo base_url() . "Rent/tambah/" . $value->id_room ?>" class="btn btn-success">Pay</a>
							<a href="<?php echo base_url() . "Report/tambah/" . $value->id_room ?>" class="btn btn-danger">Report</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	</div>
	</div>


	<?php $this->load->view('templates/User/Footer'); ?>