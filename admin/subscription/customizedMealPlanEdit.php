<?php
$title = "Edit Meal Plan";
$pg = "subscription";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!--  Meal Plan Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">Customer's - Customized Meal Plan</h6>
        </div>
        <div class="box">
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
                    <label for="" class="d-block">DOB</label>
                    <p>June 3, 1995</p>
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
                    <label for="" class="d-block">Phone</label>
                    <p>+1 123 123345</p>
                  </div>
                </div>
              </div>
              <!-- Plans Start-->
              <div class="plans my-4">
                <h5 class="site-text">Customized Meal Plan <span class="textDanger site-text ms-5">$19</span></h5>
                <ul class="plan-details">
                  <li>
                    <div class="with-price">
                      <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</h6>
                      <h5 class="d-block">$5</h5>
                    </div>
                  </li>
                  <li>
                    <div class="with-price">
                      <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</h6>
                      <h5 class="d-block">$5</h5>
                    </div>
                  </li>
                  <li>
                    <div class="with-price">
                      <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</h6>
                      <h5 class="d-block">$5</h5>
                    </div>
                  </li>
                  <li>
                    <div class="with-price">
                      <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</h6>
                      <h5 class="d-block">$5</h5>
                    </div>
                  </li>
                  <li>
                    <div class="with-price">
                      <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</h6>
                      <h5 class="d-block">$5</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Plans Ends-->
              <!-- Additional Notes start-->
              <h6 class="section-heading font-commons mb-4">Additional Notes</h6>
              <!-- Additional Notes End-->
              <div class="mb-5">
                <p class="font-light font-commons fw-400 ltGray">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                <p class="font-light font-commons fw-400 ltGray">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</p>
                <p class="font-light font-commons fw-400 ltGray">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-10">
              <!-- Tabs start -->
              <div id="daysTab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-monday-tab" type="button" data-bs-toggle="pill" data-bs-target="#pills-monday" role="tab" aria-controls="pills-monday" aria-selected="true">Monday</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-tuesday-tab" type="button" data-bs-toggle="pill" data-bs-target="#pills-tuesday" role="tab" aria-controls="pills-tuesday" aria-selected="false">Tuesday</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-wednesday-tab" type="button" data-bs-toggle="pill" data-bs-target="#pills-wednesday" role="tab" aria-controls="pills-wednesday" aria-selected="false">Wednesday</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-thursday-tab" type="button" data-bs-toggle="pill" data-bs-target="#pills-thursday" role="tab" aria-controls="pills-thursday" aria-selected="false">Thursday</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-friday-tab" type="button" data-bs-toggle="pill" data-bs-target="#pills-friday" role="tab" aria-controls="pills-wednesday" aria-selected="false">Friday</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-saturday-tab" type="button" data-bs-toggle="pill" data-bs-target="#pills-saturday" role="tab" aria-controls="pills-saturday" aria-selected="false">Saturday</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-sunday-tab" type="button" data-bs-toggle="pill" data-bs-target="#pills-sunday" role="tab" aria-controls="pills-sunday" aria-selected="false">Sunday</button>
                  </li>
                </ul>
                <!-- Tabs end -->
                <!-- Tabs Contnt start -->
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">
                    <div class="row">
                      <div class="col-lg-7">
                        <form action="#">
                          <div class="label-wrap mb-4">
                            <label for="breakFast" class="d-block mb-2">Breakfast<span class="text-danger">*</span> </label>
                            <input id="breakFast" type="text" class="profileInp" placeholder="Breakfast" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snacks" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snacks" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="lunch" class="d-block mb-2">Lunch<span class="text-danger">*</span> </label>
                            <input id="lunch" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snack" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snack" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="dinner" class="d-block mb-2">Dinner<span class="text-danger">*</span> </label>
                            <input id="dinner" type="text" class="profileInp" placeholder="Dinner" value="Enter description">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- 01 -->
                  <div class="tab-pane fade" id="pills-tuesday" role="tabpanel" aria-labelledby="pills-tuesday-tab">
                    <div class="row">
                      <div class="col-lg-7">
                        <form action="#">
                          <div class="label-wrap mb-4">
                            <label for="breakFast" class="d-block mb-2">Breakfast<span class="text-danger">*</span> </label>
                            <input id="breakFast" type="text" class="profileInp" placeholder="Breakfast" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snacks" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snacks" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="lunch" class="d-block mb-2">Lunch<span class="text-danger">*</span> </label>
                            <input id="lunch" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snack" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snack" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="dinner" class="d-block mb-2">Dinner<span class="text-danger">*</span> </label>
                            <input id="dinner" type="text" class="profileInp" placeholder="Dinner" value="Enter description">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- 02 -->
                  <div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-wednesday-tab">
                    <div class="row">
                      <div class="col-lg-7">
                        <form action="#">
                          <div class="label-wrap mb-4">
                            <label for="breakFast" class="d-block mb-2">Breakfast<span class="text-danger">*</span> </label>
                            <input id="breakFast" type="text" class="profileInp" placeholder="Breakfast" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snacks" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snacks" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="lunch" class="d-block mb-2">Lunch<span class="text-danger">*</span> </label>
                            <input id="lunch" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snack" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snack" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="dinner" class="d-block mb-2">Dinner<span class="text-danger">*</span> </label>
                            <input id="dinner" type="text" class="profileInp" placeholder="Dinner" value="Enter description">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- 03 -->
                  <div class="tab-pane fade" id="pills-thursday" role="tabpanel" aria-labelledby="pills-thursday-tab">
                    <div class="row">
                      <div class="col-lg-7">
                        <form action="#">
                          <div class="label-wrap mb-4">
                            <label for="breakFast" class="d-block mb-2">Breakfast<span class="text-danger">*</span> </label>
                            <input id="breakFast" type="text" class="profileInp" placeholder="Breakfast" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snacks" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snacks" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="lunch" class="d-block mb-2">Lunch<span class="text-danger">*</span> </label>
                            <input id="lunch" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snack" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snack" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="dinner" class="d-block mb-2">Dinner<span class="text-danger">*</span> </label>
                            <input id="dinner" type="text" class="profileInp" placeholder="Dinner" value="Enter description">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- 04 -->
                  <div class="tab-pane fade" id="pills-friday" role="tabpanel" aria-labelledby="pills-friday-tab">
                    <div class="row">
                      <div class="col-lg-7">
                        <form action="#">
                          <div class="label-wrap mb-4">
                            <label for="breakFast" class="d-block mb-2">Breakfast<span class="text-danger">*</span> </label>
                            <input id="breakFast" type="text" class="profileInp" placeholder="Breakfast" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snacks" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snacks" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="lunch" class="d-block mb-2">Lunch<span class="text-danger">*</span> </label>
                            <input id="lunch" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snack" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snack" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="dinner" class="d-block mb-2">Dinner<span class="text-danger">*</span> </label>
                            <input id="dinner" type="text" class="profileInp" placeholder="Dinner" value="Enter description">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- 05 -->
                  <div class="tab-pane fade" id="pills-saturday" role="tabpanel" aria-labelledby="pills-saturday-tab">
                    <div class="row">
                      <div class="col-lg-7">
                        <form action="#">
                          <div class="label-wrap mb-4">
                            <label for="breakFast" class="d-block mb-2">Breakfast<span class="text-danger">*</span> </label>
                            <input id="breakFast" type="text" class="profileInp" placeholder="Breakfast" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snacks" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snacks" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="lunch" class="d-block mb-2">Lunch<span class="text-danger">*</span> </label>
                            <input id="lunch" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snack" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snack" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="dinner" class="d-block mb-2">Dinner<span class="text-danger">*</span> </label>
                            <input id="dinner" type="text" class="profileInp" placeholder="Dinner" value="Enter description">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- 06 -->
                  <div class="tab-pane fade" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
                    <div class="row">
                      <div class="col-lg-7">
                        <form action="#">
                          <div class="label-wrap mb-4">
                            <label for="breakFast" class="d-block mb-2">Breakfast<span class="text-danger">*</span> </label>
                            <input id="breakFast" type="text" class="profileInp" placeholder="Breakfast" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snacks" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snacks" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="lunch" class="d-block mb-2">Lunch<span class="text-danger">*</span> </label>
                            <input id="lunch" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="snack" class="d-block mb-2">Snacks<span class="text-danger">*</span> </label>
                            <input id="snack" type="text" class="profileInp" placeholder="Snacks" value="Enter description">
                          </div>
                          <div class="label-wrap mb-4">
                            <label for="dinner" class="d-block mb-2">Dinner<span class="text-danger">*</span> </label>
                            <input id="dinner" type="text" class="profileInp" placeholder="Dinner" value="Enter description">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Tabs Contnt end -->
              </div>
              <!-- Tabs End -->
            </div>
          </div>
          <div class="text-lg-start text-center">
            <button class="main-primarybtns my-2">Update</button>
          </div>
        </div>
        <!--  Meal Plan Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>