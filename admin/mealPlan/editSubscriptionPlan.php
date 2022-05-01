<?php
$title = "Edit Subscription Plan";
$pg = "subscription";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Subscription Details Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">Edit Subscription Plan</h6>
        </div>
        <div class="box">
          <!-- Plans Start-->
          <div class="row mt-5">
            <div class="col-xl-8">
              <div class="row">
                <div class="col-lg-6 col-md-7">
                  <div class="label-wrap mb-4">
                    <label for="title" class="d-block ms-md-3">Subscription Plan Title<span class="text-danger">*</span> </label>
                    <input type="text" id="title" class="profileInp" placeholder="Enter Title">
                  </div>
                </div>
                <div class="col-lg-6  col-md-7">
                  <div class="label-wrap mb-4">
                    <div class="d-flex align-items-end">
                      <div class="w-100">
                        <label for="prices" class="d-block ms-md-3">Prices<span class="text-danger">*</span> </label>
                        <input type="text" id="description" class="profileInp" placeholder="Enter prices">
                      </div>
                      <button class="notBtn textDanger ms-3 mb-3">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6  col-md-7">
                  <div class="label-wrap mb-4">
                    <label for="description" class="d-block ms-md-3">Description1<span class="text-danger">*</span> </label>
                    <input type="text" id="description" class="profileInp" placeholder="Enter description">
                  </div>
                </div>
                <div class="col-lg-6  col-md-7">
                  <div class="label-wrap mb-4">
                    <label for="description" class="d-block ms-md-3">Description2<span class="text-danger">*</span> </label>
                    <input type="text" id="description" class="profileInp" placeholder="Enter description">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-xxl-10">
              <h5 class="site-text mb-4">Create Meal Plan for John Doe</h5>
              <!-- Tabs start -->
              <div id="daysTab">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
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
                      <div class="col-lg-8">
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
                      <div class="col-lg-8">
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
                      <div class="col-lg-8">
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
                      <div class="col-lg-8">
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
                      <div class="col-lg-8">
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
                      <div class="col-lg-8">
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
                      <div class="col-lg-8">
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
            <button type="button" data-bs-toggle="modal" data-bs-target="#planUpdated" class=" main-primarybtns my-2">Update</button>
          </div>
        </div>
        <!-- Subscription Details Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
<!-- Plan Updated Successfully! Updated Modal -->
<div class="modal fade" id="planUpdated" tabindex="-1" aria-labelledby="planUpdatedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Plan Updated Successfully!</h6>
      </div>
    </div>
  </div>
</div>