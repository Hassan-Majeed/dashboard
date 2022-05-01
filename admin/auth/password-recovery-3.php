<?php
$title = "Login";
include('../layout/header.php');
?>
<section class="authPage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 d-lg-block d-none p-0">
        <img src="../../images/sideimg.png" alt="img" class="side-img img-fluid">
      </div>
      <div class="col-lg-6 d-flex align-items-center flex-column justify-content-center position-relative">
        <img src="../../images/sideTop.png" alt="img" class="side-img-top">
        <div class="signupBox">
          <div class="logo mb-5">
            <img src="../../images/logo.png" alt="signIn" class="img-fluid">
          </div>
          <form action="password-recovery-3.php">
            <div class="text-center mb-lg">
              <h4 class="auth-heading-lg f-bold">Password Recovery</h4>
              <h6 class="f-16">Enter your email address to recieve a verification code</h6>
            </div>
            <div class="mb-5">
              <label class="d-block prime-label mb-3 mx-md-3" for="newpassword">New Password <span class="text-danger">*</span> </label>
              <div class="position-relative passwordWrapper mb-2">
                <input class="primary-inputs passInput" id="newpassword" type="password" placeholder="Enter New Password">
                <button type="button" class="not_btn passDisplay">
                  <i class="fas fa-eye-slash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div class="mb-5">
              <label class="d-block prime-label mb-3 mx-md-3" for="conpassword">Confirm Password <span class="text-danger">*</span> </label>
              <div class="position-relative passwordWrapper mb-2">
                <input class="primary-inputs passInput" id="conpassword" type="password" placeholder="Confirm Password">
                <button type="button" class="not_btn passDisplay">
                  <i class="fas fa-eye-slash" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div class="text-end mb-3">
              <button class="btnNoStyle" type="button">Resend Code</button>
            </div>
            <div class="text-center mt-5">
              <button type="button" data-bs-toggle="modal" data-bs-target="#PassUpdated" class="main-primarybtns mt-2">Update</button>
              <a href="login.php" class="text-danger my-3 d-block"> <u>Back to login</u> </a>
            </div>
          </form>
        </div>
        <img src="../../images/side.png" alt="img" class="side-img-bottom">
      </div>
    </div>
  </div>
</section>
<?php include('../layout/footer.php') ?>

<!-- Password Updated Modal -->
<div class="modal fade" id="PassUpdated" tabindex="-1" aria-labelledby="PassUpdatedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" onclick="window.location.assign('../dashboard/dashboard.php')" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Password Updated Successfully</h6>
      </div>
    </div>
  </div>
</div>