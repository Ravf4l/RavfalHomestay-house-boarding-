<?php $this->load->view('templates/User/Header'); ?>

<!-- Main Content -->
<div class="feturedsection mt-5">
	<h1 class="text-center"><span class="bdots"> Member Registration </span></h1>
</div>
</div>
<div class="register">

	<center>

		<form action="<?php echo base_url() . 'Member/daftar_aksi'; ?>" method="post">
			<div class="register col-lg-3 mt-4 text-left">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" placeholder="Full name">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Email">
				</div>

				<div class="form-group">
					<label for="status">Gender</label>
					<p><input type='radio' name="gender" value="Male" class="mr-2" />Male
						<input type='radio' name="gender" value="Female" class="ml-2 mr-2" />Female
					</p>
				</div>

				<div class="form-group">
					<label for="nohp">Phonenumber</label>
					<input type="text" class="form-control" name="nohp" placeholder="Phonenumber">
				</div>

				<div class="form-group">
					<label for="alamat">Address</label>
					<input type="text" class="form-control" name="address" placeholder="Address">
				</div>

				<button type="submit" class="btn btn-primary ml-4" value="DAFTAR">Sign up</button>
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
<?php $this->load->view('templates/User/Footer'); ?>