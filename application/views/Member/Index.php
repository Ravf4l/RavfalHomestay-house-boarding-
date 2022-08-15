	<?php $this->load->view('templates/User/Header'); ?>
	<!-- Jumbotron -->

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Get a <span>comfortable</span><br> and <span>save</span> place only <span>here</span></h1>
			<a href="<?= base_url() . "index.php/Welcome/Info"; ?>" class="btn btn-primary tombol">Room Info</a>
		</div>
	</div>

	<!-- End Jumbotron -->

	<!-- Container -->
	<div class="container">

		<!-- Info panel -->
		<div class="row justify-content-center">
			<div class="col-10 info-panel">
				<div class="row">
					<div class="col-lg">
						<img src="<?= base_url('assets/image/strategic.png'); ?>" alt="" class="float-left">
						<h4>Strategic</h4>
						<p>Easy to go anywhere</p>
					</div>
					<div class="col-lg">
						<img src="<?= base_url('assets/image/guard.png'); ?>" alt="" class="float-left">
						<h4>Safety</h4>
						<p>Guard always ready to wacth</p>
					</div>
					<div class="col-lg">
						<img src="<?= base_url('assets/image/clean.png'); ?>" alt="" class="float-left">
						<h4>Clean</h4>
						<p>Cleanliness is always maintained</p>
					</div>
					<div class="col-lg">
						<img src="<?= base_url('assets/image/fresh.png'); ?>" alt="" class="float-left">
						<h4>Fresh</h4>
						<p>Lots of manicured plants</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End info panel -->

		<!-- Facility -->
		<div class="row headfacility justify-content-center" id="facilities">Facilities</div>
		<div class="row workingspace">
			<div class="col-lg-6">
				<div class="slide">
					<div class="slide1"></div>
					<div class="slide2"></div>
					<div class="slide3"></div>
				</div>
				<!-- <img src="img/img2.png" alt="" class="image-fluid"> -->
			</div>
			<div class="col-lg-5">
				<h3>The <span>facilities</span> will you <span>get</span></h3>
				<!-- <div class="col"> -->
				<div class="row">
					<div class="col">
						<p>a bed sheet</p>
						<p>a pillow and pillow case</p>
						<p>a desk</p>
						<p>a chair</p>
						<p>a cabinet</p>
						<a class="btn btn-outline-primary" href="#home" role="button">Home</a>
					</div>
					<div class="col">
						<p>1 light bulb</p>
						<p>1 air conditioner</p>
						<p>a trash can</p>
						<p>a window</p>
						<p>a private bathroom</p>
					</div>
				</div>
				<!-- <a href="" class="btn btn-primary tombol">Galery</a> -->
			</div>
		</div>
		<!-- End Working place -->
		<div class="row headpricing justify-content-center" id="pricing">Pricing</div>
		<div class="row workingspace">
			<div class="col-lg-4 pricing">
				<h3>DEPOSIT:</h3>
				<h3>Rp1000.000,-</h3>
				<h4>Only in first month</h4>
				<!-- <img src="img/img2.png" alt="" class="image-fluid"> -->
			</div>
			<div class="col-lg-4 pricing2">
				<h3>ROOM:</h3>
				<H3>Rp1000.000,-</H3>
				<h4>1 month</h4>
				<!-- <a href="" class="btn btn-primary tombol">Galery</a> -->
			</div>
		</div>


	</div>
	<!-- End Container -->
	<?php $this->load->view('templates/User/Footer'); ?>