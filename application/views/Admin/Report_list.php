<?php $this->load->view('templates/Admin/Header'); ?>

<!-- Main Content -->
<div class="container-fluid">
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<div class="card border-primary ml- mt-4 mb-4" style="width: 15rem;">
					<div class="card-body">
						<h4 class="card-title text-primary"><i class="fa fa-home mr-2"></i>Report Room</h4>
					</div>
				</div>
				<hr>
			</div>
			<?= $this->session->flashdata('report') ?>
		</div>
		<div class="row">
			<div class="col-lg-11 ml-5">
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>NO</th>
							<th>Name</th>
							<th>Room ID</th>
							<th>About</th>
							<th>Report</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; ?>
						<?php foreach ($report as $key => $value) { ?>
							<tr>
								<th scope="row"><?= $i + 1; ?></th>
								<td><?php echo $value->name_member; ?> </td>
								<td><?php echo $value->room_name; ?></td>
								<td><?php echo $value->about; ?></td>
								<td><?php echo $value->content; ?></td>
								<td>
									<a href="<?php echo site_url('Report/delete/' . $value->report_id); ?>" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>
									</a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php } ?>
						<h4 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Report : <?= $i ?></h4>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End of main content  -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php $this->load->view('templates/Admin/Footer'); ?>