<?php
$title = "Admin Profile";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Admin Details Starts -->
        <div class="m-md-5 m-2">
          <h1 class="section-heading font-commons">Profile</h1>
        </div>
        <div class="box mx-md-5 my-5 p-md-5 mb-5">
          <div class="text-end">
            <a href="./updatePassword.php" class="textDanger"><i class="far fa-edit"></i><u>Change Password</u></a>
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
              </div>
              <a href="./editProfile.php" class="main-primarybtns">Edit Profile</a>
            </div>
          </div>
        </div>
        <!-- Admin Details Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>