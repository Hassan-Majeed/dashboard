<?php
$title = "Update Password";
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
          <h6 class="section-heading font-commons mb-0">Update Password</h6>
        </div>
        <div class="box">
          <form action="#">
            <div class="row">
              <div class="col-xl-8 col-lg-10">
                <div class="row mt-5">
                  <div class="col-xxl-6 col-xl-8 col-md-10 ">
                    <div class="label-wrap mb-4">
                      <label for="cPass" class="d-block mb-1 ms-md-3">Current Password<span class="text-danger">*</span> </label>
                      <div class="inp-wrap mb-3 position-relative passwordWrapper">
                        <input id="cPass" type="password" placeholder="Enter Existing Password" class="profileInp passInput">
                        <button class="not_btn passDisplay eye-icon" type="button">
                          <i class="fas fa-eye-slash" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                    <div class="label-wrap mb-4">
                      <label for="nPass" class="d-block mb-1 ms-md-3">New Password<span class="text-danger">*</span> </label>
                      <div class="inp-wrap mb-3 position-relative passwordWrapper">
                        <input id="nPass" type="password" placeholder="Enter New Password" class="profileInp passInput">
                        <button class="not_btn passDisplay eye-icon" type="button">
                          <i class="fas fa-eye-slash" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                    <div class="label-wrap mb-4">
                      <label for="conPass" class="d-block mb-1 ms-md-3">Confirm Password<span class="text-danger">*</span> </label>
                      <div class="inp-wrap mb-3 position-relative passwordWrapper">
                        <input id="conPass" type="password" placeholder="Enter Password" class="profileInp passInput">
                        <button class="not_btn passDisplay eye-icon" type="button">
                          <i class="fas fa-eye-slash" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="main-primarybtns my-3" data-bs-toggle="modal" data-bs-target="#profileUpdate2">Update</button>
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
<div class="modal fade" id="profileUpdate2" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
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