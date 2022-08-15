	<?php $this->load->view('templates/User/Header_member'); ?>
	<!--Main content -->

	<div class="feturedsection mt-2">
		<h1 class="text-center"><span class="bdots">Lease payment status of all tenants</span></h1>
	</div>
	<div class="row ml-2">
		<div class="col-lg-5 mt-4" style="margin-left: 430px">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Room </th>
						<th>Month</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($rent as $key => $value) { ?>
						<tr>
							<td><?= $value->name_member ?></td>
							<td><?= $value->room_name; ?></td>
							<td><?= $value->month; ?></td>
							<td><?= $value->status; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- End of main content -->

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


	<?php $this->load->view('templates/User/Footer'); ?>