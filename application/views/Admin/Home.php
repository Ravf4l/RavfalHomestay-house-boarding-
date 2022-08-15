<?php $this->load->view('templates/Admin/Header'); ?>

<!-- Main Content -->
<div class="container-fluid">
   <div id="page-wrapper">
      <div class="row">
         <div class="col-lg-12 mt-4">
            <div class="card border-primary" style="width: 15rem;">
               <div class="card-body">
                  <h4 class="card-title text-primary"><i class="fa fa-tachometer mr-2"></i>Home</h4>
               </div>
            </div>
            <H2 style="text-align: right; margin-top: -80px">Welcome <?php echo $this->session->userdata('username'); ?> ! </H2>
         </div>

         <hr />
         <div class="row">

            <div class="col" style="margin-left: 330px;">
               <img src="<?= base_url("assets/image/logo.1.png") ?>" height="450px" alt="">
               <img src="<?= base_url("assets/image/presuniv.png") ?>" height="350px" alt="" style="margin-left: 50px;">
            </div>
            <div class="name">

            </div>
         </div>
         <div class="row">
            <h2 style="margin-left: 460px;"> RAVFAL Homestay | PRESIDENT UNIVERSITY</h2>
         </div>
      </div>
      <div class="row">
         <h4 style="margin-left: 640px;">Information System 1</h4>
      </div>
   </div>

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
<br>
<br>

<?php $this->load->view('templates/Admin/Footer'); ?>