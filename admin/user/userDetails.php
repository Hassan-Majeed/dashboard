<?php
$title = "users";
$pg = "user";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- User Details Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">User Details</h6>
        </div>
        <div class="box">
          <div class="text-end">
            <a href="edit-user-profile.php" class="textDanger"><i class="far fa-edit"></i><u>Edit</u></a>
          </div>
          <div class="row">
            <div class="col-xl-8 col-lg-10">
              <div class="avatar-wrap">
                <img src="../../images/adminAvatar.png" alt="avatar" class="userAvatar img-fluid">
              </div>
              <div class="row mt-5">
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">First Name</label>
                    <p>Andrew</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Last Name</label>
                    <p>Simmons</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Email</label>
                    <p>testing@test.com</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Gender</label>
                    <p>Female</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">DOB</label>
                    <p>June 3, 1995</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Phone</label>
                    <p>+1 123 123345</p>
                  </div>
                </div>
              </div>
              <div class="my-4 text-md-start text-center">
                <a href="#" class="main-secbtn me-md-4 mb-2">View Subscription</a>
                <a href="#" class="main-primarybtns  mb-2">View Orders</a>
              </div>
            </div>
          </div>
        </div>
        <!-- User Details Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>