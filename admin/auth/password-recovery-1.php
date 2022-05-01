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
     <form action="password-recovery-2.php">
      <div class="text-center mb-lg">
       <h4 class="auth-heading-lg f-bold">Password Recovery</h4>
       <h6 class="f-16">Enter your email address to recieve a verification code</h6>
      </div>
      <div class="mb-5">
       <label class="d-block prime-label mb-3 mx-md-3" for="email">Email Address <span class="text-danger">*</span> </label>
       <input type="email" id="email" contenteditable="true" class="primary-inputs" placeholder="Enter Email Address">
      </div>
      <div class="text-center mt-3">
       <button type="submit" class="main-primarybtns mt-2">Continue</button>
      </div>
      <div class="text-center my-4">
       <a href="login.php" class="text-danger mt-2"> <u>Back to login</u> </a>
      </div>
     </form>
    </div>
    <img src="../../images/side.png" alt="img" class="side-img-bottom">
   </div>
  </div>
 </div>
</section>
<?php include('../layout/footer.php') ?>