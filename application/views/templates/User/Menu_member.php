<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light top-fixed">
	<div class="container" id="home">
		<a class="navbar-brand"><img src="<?= base_url('assets/image/logo.2.png'); ?>" height="55px"> RAVFAL Homestay</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<a class="nav-item nav-link active" href="<?= base_url() . "Welcome/Index_member"; ?>">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="#rules">Rules</a>
				<a class="nav-item nav-link" href="<?= base_url() . "Welcome/Info_member"; ?>">Room Info</a>
				<a class="nav-item nav-link" href="<?= base_url() . "Welcome/Rent_status"; ?>">Payment Status</a>
				<a class="nav-item btn btn-primary tombol" href="<?php echo base_url() . "LoginMember/Logout"; ?>">Sign out</a>

			</div>
		</div>
	</div>
</nav>

<!-- End navbar -->