<?php
$title = "Edit User Profile";
include('../layout/header.php');
include('../layout/sidebar.php');
$pg = "user";
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- User Details Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">Edit User</h6>
        </div>
        <div class="box">
          <form action="#">
            <div class="row p-2">
              <div class="col-xl-8 col-lg-10">
                <div class="avatar-wrap position-relative">
                  <img src="../../images/adminAvatar.png" alt="avatar" class="userAvatar img-fluid">
                  <button name="file" class="camera-btn" onclick="document.getElementById('uploadFile').click()"><i class="fa fa-camera"></i></button>
                  <input id="uploadFile" type="file" class="d-none">
                </div>
                <div class="row mt-5">
                  <div class="col-lg-6">
                    <div class="label-wrap mb-4">
                      <label for="fname" class="d-block">First Name <span class="text-danger">*</span> </label>
                      <input id="fname" type="text" class="profileInp" placeholder="Enter First Name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="label-wrap mb-4">
                      <label for="lname" class="d-block">Last Name <span class="text-danger">*</span> </label>
                      <input id="lname" type="text" class="profileInp" placeholder="Enter Last Name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="label-wrap mb-4">
                      <label for="phone" class="d-block">Phone Number <span class="text-danger">*</span> </label>
                      <input id="phone" type="number" class="profileInp" placeholder="+1 123 1234546">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="label-wrap mt-4">
                      <label class="d-block">Email</label>
                      <p>testing@test.com</p>
                    </div>
                  </div>
                </div>
                <button type="button" data-bs-toggle="modal" data-bs-target="#userprofileUpdate" class="main-primarybtns my-4">Update</button>
              </div>
            </div>
          </form>
        </div>
        <!-- User Details Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
<!-- Profile Updated Modal -->
<div class="modal fade" id="userprofileUpdate" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">User Updated Successfully!</h6>
      </div>
    </div>
  </div>
</div>