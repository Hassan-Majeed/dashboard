<?php
$title = "users";
$pg = "user";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- User Management Starts -->
        <div class="d-md-flex alignment-xy-bw text-center">
          <h1 class="section-heading font-commons my-2 mb-4">User Management</h1>
          <a href="./addUser.php" class="main-primarybtns my-2 mb-4">Add User</a>
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Registration Date</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Abc</td>
                            <td>Abc</td>
                            <td>mm/dd/yyyy</td>
                            <td>abc@email.com</td>
                            <td>+1 123 123568</td>
                            <td class="text-green">Active</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="userDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#inActivateUser"><i class="fas fa-times"></i>Inactive</button>
                                  <a class="dropdown-item" href="./edit-user-profile.php">
                                    <i class="fas fa-pen"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Abc</td>
                            <td>Abc</td>
                            <td>mm/dd/yyyy</td>
                            <td>abc@email.com</td>
                            <td>+1 123 123568</td>
                            <td>Inactive</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="userDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#ActivatedUser"><i class="fas fa-check"></i>Active</button>
                                  <a class="dropdown-item" href="./edit-user-profile.php">
                                    <i class="fas fa-pen"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Abc</td>
                            <td>Abc</td>
                            <td>mm/dd/yyyy</td>
                            <td>abc@email.com</td>
                            <td>+1 123 123568</td>
                            <td class="text-green">Active</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="userDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#inActivateUser"><i class="fas fa-times"></i>Inactive</button>
                                  <a class="dropdown-item" href="./edit-user-profile.php">
                                    <i class="fas fa-pen"></i>Edit</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="tableRow">
                            <td>01</td>
                            <td>Abc</td>
                            <td>Abc</td>
                            <td>mm/dd/yyyy</td>
                            <td>abc@email.com</td>
                            <td>+1 123 123568</td>
                            <td>Inactive</td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                  <a class="dropdown-item" href="userDetails.php">
                                    <i class="far fa-eye "></i>Details</a>
                                  <button type="button" class="dropdown-item notBtn" data-bs-toggle="modal" data-bs-target="#ActivatedUser"><i class="fas fa-check"></i>Active</button>
                                  <a class="dropdown-item" href="./edit-user-profile.php">
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
        <!-- User Management Ends -->
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
<!-- Inactive User Modal -->
<div class="modal fade" id="inActivateUser" tabindex="-1" aria-labelledby="inActivateUserLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/sure.png" class="modal-header-img" alt="sure?">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text mt-2">Are You Sure You Want <br> To Inactive This User?</h6>
        <div class="text-center mt-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#userInActivatedUpdate" data-bs-dismiss="modal" class="main-modalbtn-light me-md-3 mb-2">Yes</button>
          <button type="button" data-bs-dismiss="modal" data-bs-dismiss="modal" class="main-modalbtn mb-2">No</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- userInActivated Updated Modal -->
<div class="modal fade" id="userInActivatedUpdate" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">User Inactivated Successfully!</h6>
      </div>
    </div>
  </div>
</div>
<!-- Activate User Modal -->
<div class="modal fade" id="ActivatedUser" tabindex="-1" aria-labelledby="ActivatedUserLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/sure.png" class="modal-header-img" alt="sure?">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text mt-2">Are You Sure You Want <br> To Active This User?</h6>
        <div class="text-center mt-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#userActivatedUpdate" data-bs-dismiss="modal" class="main-modalbtn-light me-md-3 mb-2">Yes</button>
          <button type="button" data-bs-dismiss="modal" data-bs-dismiss="modal" class="main-modalbtn mb-2">No</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- userInActivate Updated Modal -->
<div class="modal fade" id="userActivatedUpdate" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">User Activated Successfully!</h6>
      </div>
    </div>
  </div>
</div>