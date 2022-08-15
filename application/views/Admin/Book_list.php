<?php $this->load->view('templates/Admin/Header'); ?>

<!-- Main Content -->
<div class="container-fluid">
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12 mt-4">
				<div class="card border-primary" style="width: 15rem;">
					<div class="card-body">
						<h4 class="card-title text-primary"><i class="fa fa-book mr-2"></i>Booking Data</h4>
					</div>
				</div>
				<hr>
			</div><?= $this->session->flashdata('Pesan') ?>
		</div>
		<div class="row">
			<div class="col-lg-11 ml-5">
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>NO</th>
							<th>Name</th>
							<th>Phonenumber</th>
							<th>Room ID</th>
							<th>Start Date</th>
							<th>Month Duration</th>
							<th style="width: 150px">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 0; ?>
						<?php foreach ($book as $key => $value) { ?>
							<tr class="warning">
								<th scope="row"><?= $i + 1; ?></th>
								<td><?php echo $value->name_member; ?> </td>
								<td><?php echo $value->nohp; ?></td>
								<td><?php echo $value->room_name; ?></td>
								<td><?php echo $value->start_date; ?></td>
								<td><?php echo $value->duration; ?></td>
								<td>
									<a href="<?php echo site_url('Book/update/' . $value->book_id); ?>" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
									<a href="<?php echo site_url('Book/delete/' . $value->book_id); ?>" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>
									</a>

								</td>
							</tr>
							<?php $i++; ?>
						<?php } ?>
						<h4 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Booking : <?= $i ?></h4>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End of main content -->

<?php $this->load->view('templates/Admin/Footer'); ?>