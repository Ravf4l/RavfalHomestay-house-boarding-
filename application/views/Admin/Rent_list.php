<?php $this->load->view('templates/Admin/Header'); ?>

<!-- Main Content -->
<div class="container-fluid">
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12 mt-4">
				<div class="card border-primary" style="width: 15rem;">
					<div class="card-body">
						<h4 class="card-title text-primary"><i class="fa fa-dollar mr-2"></i>Payment Data</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-11 mt-4" style="margin-left: 120px;">
					<table id="example" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>NO </th>
								<th>Name</th>
								<th style="width: 100px;">Room ID</th>
								<th style="width: 150px">Payment Date</th>
								<th>Nominal</th>
								<th style="width: 150px">Payment Proof</th>
								<th>Month</th>
								<th>Status</th>
								<th style="width: 250px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($rent as $key => $value) { ?>
								<tr class="warning">
									<th scope="row"><?= $i; ?></th>
									<td><?= $value->name_member; ?></td>
									<td><?= $value->room_name; ?></td>
									<td><?= $value->date; ?></td>
									<td><?= number_format($value->nominal, 0); ?></td>
									<td><?= $value->picture; ?><img style="width:200px; height:auto;" width="50%" height="50%" src="<?= site_url() ?>assets/admin/uploads/<?= $value->picture; ?>"></td>
									<td><?= $value->month; ?></td>
									<td><?= $value->status; ?></td>
									<td>
										<a href="<?= site_url('rent/update/' . $value->rent_id); ?>" class="btn btn-primary">
											<i class="fa fa-pencil-square"></i>
										</a>

										<a href="<?= site_url('rent/delete/' . $value->rent_id); ?>" class="btn btn-danger">
											<i class="fa fa-trash-o"></i>
										</a>

										<a href="" class="btn btn-success">
											<i class="fa fa-whatsapp"></i>
										</a>

										<a href="<?= site_url('rent/download/' . $value->rent_id); ?>" class="btn btn-info">
											<i class="fa fa-download"></i>
										</a>
									</td>
								</tr>
								<?php $i++; ?>
							<?php } ?>
							<h4 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Total income: Rp. <?= number_format($sum_total->total); ?></h4>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>

</div>
<!-- End of main content -->
<br>
<br>
<br>
<br>
<br>

<?php $this->load->view('templates/Admin/Footer'); ?>