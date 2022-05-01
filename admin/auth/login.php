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
     <form action="../dashboard/dashboard.php">
      <div class="text-center mb-lg">
       <h4 class="auth-heading-lg f-bold">Login</h4>
       <h6 class="f-16">Please Log In with your email address.</h6>
      </div>
      <div class="mb-5">
       <label class="d-block prime-label mb-3 mx-md-3" for="email">Email Address <span class="text-danger">*</span> </label>
       <input type="email" id="email" contenteditable="true" class="primary-inputs" placeholder="Enter Email Address">
      </div>
      <div class="mb-5">
       <label class="d-block prime-label mb-3 mx-md-3" for="password">Password <span class="text-danger">*</span> </label>
       <div class="position-relative passwordWrapper mb-2">
        <input class="primary-inputs passInput" id="password" type="password" placeholder="Enter Password">
        <button type="button" class="not_btn passDisplay">
         <i class="fas fa-eye-slash" aria-hidden="true"></i>
        </button>
       </div>
      </div>
      <div class="d-flex justify-content-between align-items-center">
       <div class="form-group">
        <input type="checkbox" class="custom-checkbox" id="rememberMe">
        <label for="rememberMe" class="ms-2">Remember Me</label>
       </div>
       <a href="password-recovery-1.php" class="text-danger forgot mt-2"> <u>Forget password?</u> </a>
      </div>
      <div class="text-center mt-3">
       <button type="submit" class="main-primarybtns mt-2">Login</button>
      </div>
     </form>
    </div>
    <img src="../../images/side.png" alt="img" class="side-img-bottom">
   </div>
  </div>
 </div>
</section>
<?php include('../layout/footer.php') ?>