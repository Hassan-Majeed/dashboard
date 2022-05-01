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
       <label class="d-block prime-label mb-3 mx-md-3" for="number">Verification Code <span class="text-danger">*</span> </label>
       <input type="number" id="number" contenteditable="true" class="primary-inputs" placeholder="Enter Verification Code">
      </div>
      <div class="text-end mb-3">
       <button class="btnNoStyle" type="button">Resend Code</button>
      </div>
      <div class="text-center mt-5">
       <button type="submit" class="main-primarybtns mt-2">Continue</button>
       <a href="login.php" class="text-danger  my-3 "> <u>Back to login</u> </a> 
      </div>
     </form>
    </div>
    <img src="../../images/side.png" alt="img" class="side-img-bottom">
   </div>
  </div>
 </div>
</section>
<?php include('../layout/footer.php') ?>