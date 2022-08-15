<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light top-fixed">
	<div class="container" id="home">
		<a class="navbar-brand"><img src="<?= base_url('assets/image/logo.2.png'); ?>" height="55px"> RAVFAL Homestay</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<a class="nav-item nav-link active" href="<?= base_url() . "index.php"; ?>">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="#facilities">Facilities</a>
				<a class="nav-item nav-link" href="#pricing">Pricing</a>
				<a class="nav-item nav-link" href="#about">About</a>
				<a class="nav-item btn btn-primary tombol" href="<?= base_url() . "index.php/Welcome/Login_member"; ?>">Sign in</a>

			</div>
		</div>
	</div>
</nav>

<!-- End navbar -->