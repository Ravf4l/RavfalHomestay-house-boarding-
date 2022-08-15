<?php $this->load->view('templates/Admin/Header'); ?>
<div class="container-fluid">
	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-lg-12">
					<div class="card border-primary mt-4 mb-4" style="width: 15rem;">
						<div class="card-body">
							<h4 class="card-title text-primary"><i class="fa fa-users mr-2"></i>Member Info</h4>
						</div>
					</div>
				</div><?= $this->session->flashdata('member') ?>
			</div>
			<div class="row">
				<div class="col-lg-11 ml-5">
					<table id="example" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>NO</th>
								<th>Name</th>
								<th>Password</th>
								<th>E-mail</th>
								<th>Gender</th>
								<th>Phonenumber</th>
								<th>Address</th>
								<th style="width: 150px">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; ?>
							<?php foreach ($member as $key => $value) { ?>
								<tr class="warning">
									<th scope="row"><?= $i+1; ?></th>
									<td><?php echo $value->name_member; ?></td>
									<td><?php echo $value->pass_member; ?></td>
									<td><?php echo $value->email_member; ?></td>
									<td><?php echo $value->gender; ?></td>
									<td><?php echo $value->nohp; ?></td>
									<td><?php echo $value->address_member; ?></td>
									<td>

										<a href="<?php echo site_url('member/update/' . $value->id_member); ?>" class="btn btn-primary">
											<i class="fa fa-pencil-square"></i>
										</a>
										<a href="<?php echo site_url('member/delete/' . $value->id_member); ?>" class="btn btn-danger">
											<i class="fa fa-trash-o"></i>
										</a>
									</td>
								</tr>
								<?php $i++; ?>
							<?php } ?>
							<h4 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Member : <?= $i ?></h4>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- /. ROW  -->
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<?php $this->load->view('templates/Admin/Footer'); ?>