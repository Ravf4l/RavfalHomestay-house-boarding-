<?php $this->load->view('templates/Admin/Header'); ?>

<!-- Main content -->
<div class="container-fluid">
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12 mt-4">
				<div class="card border-primary" style="width: 15rem;">
					<div class="card-body">
						<h4 class="card-title text-primary"><i class="fa fa-home mr-2"></i>Room Data</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-3 ml-4 mt-3">
				<?= $this->session->flashdata('pesan') ?>
			</div>
			<div class="col-md-12 text-left ml-5">
				<a href="<?php echo site_url('room/tambah'); ?>" class="btn btn-primary" style="margin-top:20px; margin-bottom:20px">
					<i class="fa fa-plus-circle"></i> Add New Room</a>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-11 ml-5">
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th style="width: 10px">NO</th>
							<th style="width: 100px">Room ID</th>
							<th>Floor</th>
							<th>Facility</th>
							<th>Status</th>
							<th>Price</th>
							<th style="width: 150px">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; ?>
						<?php foreach ($room as $key => $value) { ?>
							<tr class="warning">
								<th scope="row"><?= $i + 1; ?></th>
								<td><?php echo $value->room_name; ?></td>
								<td><?php echo $value->floor; ?></td>
								<td><?php echo $value->facility; ?></td>
								<td><?php echo $value->stats; ?></td>
								<td><?php echo $value->cost; ?></td>

								<td>
									<a href="<?php echo site_url('room/update/' . $value->id_room); ?>" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
									<a href="<?php echo site_url('room/delete/' . $value->id_room); ?>" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>
									</a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php } ?>
						<h4 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Total Room : <?= $i ?></h4>
					</tbody>
				</table>
			</div>
		</div>
	</div>


</div>
<!-- End of main content -->

<?php $this->load->view('templates/Admin/Footer'); ?>