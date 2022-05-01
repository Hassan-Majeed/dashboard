<?php
$title = "Subscription Details";
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
          <h6 class="section-heading font-commons mb-0">Subscription Details</h6>
        </div>
        <div class="box">
          <div class="row">
            <div class="col-lg-6  order-lg-1 order-2">
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
                </ul>
              </div>
              <!-- Plans Ends-->
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
              <div class="d-flex align-items-center justify-content-end d-block">
                <h4 class="me-3 mb-0">Active</h4>
                <input class="switch-inp" type="checkbox" id="switch" data-bs-toggle="modal" data-bs-target="#planInActive">
                <label for="switch" class="switch-label mb-0"></label>
                <h5 class="mb-0 ms-2">Inactive</h5>
              </div>
            </div>
          </div>
          <div class="row mt-3">
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
                    <div class="tab-details">
                      <label for="">Breakfast</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Lunch</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Dinner</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                  </div>
                  <!-- 01 -->
                  <div class="tab-pane fade" id="pills-tuesday" role="tabpanel" aria-labelledby="pills-tuesday-tab">
                    <div class="tab-details">
                      <label for="">Breakfast</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Lunch</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Dinner</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                  </div>
                  <!-- 02 -->
                  <div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-wednesday-tab">
                    <div class="tab-details">
                      <label for="">Breakfast</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Lunch</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Dinner</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                  </div>
                  <!-- 03 -->
                  <div class="tab-pane fade" id="pills-thursday" role="tabpanel" aria-labelledby="pills-thursday-tab">
                    <div class="tab-details">
                      <label for="">Breakfast</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Lunch</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Dinner</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                  </div>
                  <!-- 04 -->
                  <div class="tab-pane fade" id="pills-friday" role="tabpanel" aria-labelledby="pills-friday-tab">
                    <div class="tab-details">
                      <label for="">Breakfast</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Lunch</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Dinner</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                  </div>
                  <!-- 05 -->
                  <div class="tab-pane fade" id="pills-saturday" role="tabpanel" aria-labelledby="pills-saturday-tab">
                    <div class="tab-details">
                      <label for="">Breakfast</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Lunch</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Dinner</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                  </div>
                  <!-- 06 -->
                  <div class="tab-pane fade" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
                    <div class="tab-details">
                      <label for="">Breakfast</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Lunch</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Snacks</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                    <div class="tab-details">
                      <label for="">Dinner</label>
                      <p>Oatmeal, skimmed milk topped with red berries and muesli.</p>
                    </div>
                  </div>
                </div>
                <!-- Tabs Contnt end -->
              </div>
              <!-- Tabs End -->
            </div>
          </div>
          <div class="text-lg-start text-center">
            <button class="main-secbtns my-2 me-md-4">Delete</button>
            <a href="customizeMealPlan-edit.php" class="main-primarybtns my-2">Edit Plan </a>
          </div>
        </div>
        <!-- Subscription Details Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
<script>
  $(document).ready(function() {
    $('#switch').on('change', function(e) {
      console.log("Hello ")
      if (e.target.checked) {
        console.log("Hello chl gaya hun")
        $('#programUpdated').modal();
      }
    });
  });
</script>
<!-- Sure You Want To InActive Modal -->
<div class="modal fade" id="planInActive" tabindex="-1" aria-labelledby="planInActiveLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/sure.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text mt-2">Are You Sure You Want <br> To InActive This Plan?</h6>
        <div class="text-center mt-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#planInActivated" data-bs-dismiss="modal" class="main-modalbtn-light me-md-3 mb-2">Yes</button>
          <button type="button" data-bs-dismiss="modal" data-bs-dismiss="modal" class="main-modalbtn mb-2">No</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- plan InActive Successfully! Updated Modal -->
<div class="modal fade" id="planInActivated" tabindex="-1" aria-labelledby="planInActiveLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/sure.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Plan InActivated Successfully!</h6>
      </div>
    </div>
  </div>
</div>
<script>