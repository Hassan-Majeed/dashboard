<?php
$title = "Edit Profile";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Admin Details Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">Edit Profile</h6>
        </div>
        <div class="box">
          <form action="#">
            <div class="row">
              <div class="col-xl-8 col-lg-10">
                <div class="avatar-wrap position-relative">
                  <img src="../../images/adminAvatar.png" alt="avatar" class="userAvatar img-fluid">
                  <button name="file" class="camera-btn" onclick="document.getElementById('uploadFile').click()"><i class="fa fa-camera"></i></button>
                  <input id="uploadFile" type="file" class="d-none">
                </div>
                <div class="row mt-5">
                  <div class="col-lg-6 col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="" class="d-block">First Name<span class="text-danger">*</span> </label>
                      <input type="text" class="profileInp" placeholder="Marry">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="" class="d-block">Last Name<span class="text-danger">*</span> </label>
                      <input type="text" class="profileInp" placeholder="Carson">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="" class="d-block">Email</label>
                      <p>testing@test.com</p>
                    </div>
                  </div>
                </div>
                <button type="button" class="main-primarybtns my-4" data-bs-toggle="modal" data-bs-target="#profileUpdate">Update</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Admin Details Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
<!-- Profile Updated Modal -->
<div class="modal fade" id="profileUpdate" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Profile Updated Successfully!</h6>
      </div>
    </div>
  </div>
</div>