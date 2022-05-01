<?php
$title = "Subscription - Listing";
$pg = "mealPlan";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Subscription Management Starts -->
        <div class="d-md-flex alignment-xy-bw text-center">
          <h1 class="section-heading font-commons my-2 mb-4">Subscription - Listing</h1>
          <a href="#_" class="main-primarybtns my-2 mb-4">Add User</a>
        </div>
        <div class="box">
          <!-- Search Filter Starts -->
          <div class="row align-items-end">
            <div class="col-xxl-9">
              <div class="d-xl-flex align-items-center mb-3">
                <div class="filter-box">
                  <label for="enries" class="d-block">Show Enries</label>
                  <select name="" id="enries" class="select-filter">
                    <option value="">05</option>
                    <option value="">01</option>
                    <option value="">02</option>
                    <option value="">03</option>
                  </select>
                </div>
                <div>
                  <label class="d-block" for="date">Date</label>
                  <div class="d-md-flex align-items-center text-center">
                    <div class="filter-box me-md-2">
                      <input type="date" class="filters" id="date">
                    </div>
                    <span class="d-inline-block me-md-2 prime-label">
                      -
                    </span>
                    <div class="filter-box">
                      <input type="date" class="filters" id="date2">
                    </div>
                  </div>
                </div>
                <div class="filter-box">
                  <label class="d-block" for="status">By Status </label>
                  <select name="" id="status" class="filters">
                    <option value="">Select</option>
                    <option value="active">Active</option>
                    <option value="InActive">InActive</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-md-6">
              <div class="search-wrap  mb-3">
                <input type="search" class="form-control search-inp" placeholder="Search">
                <i class="fas fa-search searchIcon"></i>
              </div>
            </div>
          </div>
          <!-- Search Filter Ends -->
          <div class="dataTables_wrapper">
            <div class="row row-table">
              <div class="main-tabble table-responsive">
                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-borderless dataTable">
                        <thead>
                          <tr>
                            <th>S.No.</th>
                            <th>Subscription Title</th>
                            <th>Type</th>
                            <th>Cost</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Subscription abc</td>
                            <td>Normal</td>
                            <td>$20</td>
                            <td>mm/dd/yyyy</td>
                            <td class="text-green">Active</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="subscriptionDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#inActivatePlan"><i class="fas fa-times"></i>Mark as Inactive</button>
                                  <a class="dropdown-item" href="#">
                                    <i class="fas fa-pen"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Subscription abc</td>
                            <td>Customized</td>
                            <td>$20</td>
                            <td>mm/dd/yyyy</td>
                            <td>Inactive</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="subscriptionDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#Activatedplan"><i class="fas fa-check"></i>Mark as active</button>
                                  <a class="dropdown-item" href="#">
                                    <i class="fas fa-pen"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Subscription abc</td>
                            <td>Customized</td>
                            <td>$20</td>
                            <td>mm/dd/yyyy</td>
                            <td>Inactive</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="subscriptionDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#Activatedplan"><i class="fas fa-check"></i>Mark as active</button>
                                  <a class="dropdown-item" href="#">
                                    <i class="fas fa-pen"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Subscription abc</td>
                            <td>Normal</td>
                            <td>$20</td>
                            <td>mm/dd/yyyy</td>
                            <td>Inactive</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="subscriptionDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#Activatedplan"><i class="fas fa-check"></i>Mark as active</button>
                                  <a class="dropdown-item" href="#">
                                    <i class="fas fa-pen"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination start -->
        <div class="row align-items-center  my-5 p-5 table-responsive">
          <div class="col-lg-5 col-sm-12 col-md-12">
            <h6 class="pagination-details"> Showing 05 out of 40 records </h6>
          </div>
          <div class="col-lg-7 col-sm-12 col-md-12">
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
              <ul class="pagination">
                <div class="pagination_wrapper d-flex align-items-center justify-content-center">
                  <li class="paginate_button page-item previous disabled"> <a href="#" class="page-link pure-black">Previous</a> </li>
                  <li class="paginate_button page-item active"> <a href="#" class="page-link">01</a> </li>
                  <li class="paginate_button page-item"> <a href="#" class="page-link">02</a> </li>
                  <li class="paginate_button page-item"> <a href="#" class="page-link">30</a> </li>
                  <li class="paginate_button page-item next disabled " i=""> <a href="#" class="page-link pure-black">Next</a> </li>
                </div>
              </ul>
            </div>
          </div>
        </div>
        <!-- Pagination End -->
        <!-- Subscription Management Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
<!--  Plan  Inactive User Modal -->
<div class="modal fade" id="inActivatePlan" tabindex="-1" aria-labelledby="inActivatePlanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/sure.png" class="modal-header-img" alt="sure?">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text mt-2">Are You Sure You Want <br> To Inactive This Plan?</h6>
        <div class="text-center mt-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#planInActivatedUpdate" data-bs-dismiss="modal" class="main-modalbtn-light me-md-3 mb-2">Yes</button>
          <button type="button" data-bs-dismiss="modal" data-bs-dismiss="modal" class="main-modalbtn mb-2">No</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Plan InActivated Updated Modal -->
<div class="modal fade" id="planInActivatedUpdate" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Plan Marked As Inactive Successfully!</h6>
      </div>
    </div>
  </div>
</div>
<!-- Activate Plan Modal -->
<div class="modal fade" id="Activatedplan" tabindex="-1" aria-labelledby="ActivatedplanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/sure.png" class="modal-header-img" alt="sure?">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text mt-2">Are You Sure You Want <br> To Active This Plan?</h6>
        <div class="text-center mt-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#planActivatedUpdate" data-bs-dismiss="modal" class="main-modalbtn-light me-md-3 mb-2">Yes</button>
          <button type="button" data-bs-dismiss="modal" data-bs-dismiss="modal" class="main-modalbtn mb-2">No</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- userInActivate Updated Modal -->
<div class="modal fade" id="planActivatedUpdate" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Plan Activated Successfully!</h6>
      </div>
    </div>
  </div>
</div>