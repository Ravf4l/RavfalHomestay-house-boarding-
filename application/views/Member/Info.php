	<?php $this->load->view('templates/User/Header'); ?>

	<!-- ____________________info kost______________________________-->
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">Room Info</span></h1>
		<h3 class="text-center">M (Male) | W (Female)</h3>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
			<?php foreach ($room as $key => $value) { ?>
				<div class="row">
					<div class="col-lg-auto">
						<div class="card ml-3 mt-3" style="width: 18rem;">
							<div class="card-body ml-2">
								<h5 class="card-title"><?= $value->room_name; ?></h5>
								<h6 class="card-subtitle mb-2 text-muted">Floor <?= $value->floor; ?></h6>
								<p class="card-text"><b>Facility</b> <br><?= $value->facility; ?></p>
								<p class="card-text">Status <b><?= $value->stats; ?></b></p>
								<p class="card-text"><b>Price</b> Rp.<?= number_format($value->cost); ?></h2>
								</p>
								<a href="<?= base_url() . "Welcome/Regis"; ?>" class="btn btn-primary">Book</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	</div>
	<br>
	<br>
	<br>

	<?php $this->load->view('templates/User/Footer'); ?>