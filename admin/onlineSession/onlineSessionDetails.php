<?php
$title = "Session Details";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Program Details Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">Online Session - Details</h6>
        </div>
        <div class="box">
          <div class="row">
            <div class="col-xxl-3 col-xl-5">
              <div class="program-img-wrap mb-4">
                <img src="../../images/programImg.png" alt="programImg" class="img-fluid">
              </div>
            </div>
            <div class="col-xxl-5 col-xl-8 col-lg-10">
              <div class="row">
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Date</label>
                    <p>Jul 22,2022</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Time</label>
                    <p>02:00 PM</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Duration</label>
                    <p>1 hour</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Total Seats</label>
                    <p>25</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Available Seats</label>
                    <p>20</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="label-wrap mb-4">
                    <label for="" class="d-block">Price</label>
                    <p>$25</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <p class="ltGray">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc.
              </p>
            </div>
          </div>
        <a href="./editSession.php" class="main-primarybtns my-5">Edit</a>
        </div>
    </div>
    <!-- Program Details Ends -->
    </section>
  </div>
</div>
</div>
<?php include('../layout/footer.php') ?>