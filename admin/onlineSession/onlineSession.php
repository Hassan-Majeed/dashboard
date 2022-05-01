<?php
$title = "Online Session";
$pg = "session";
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
     <h1 class="section-heading font-commons my-2 mb-4">Online Session Management</h1>
     <a href="#_" class="main-primarybtns my-2 mb-4">Create Product</a>
    </div>
    <div class="box">
     <!-- Search Filter Starts -->
     <div class="row align-items-end">
      <div class="col-xl-8 col-lg-6">
       <div class="d-lg-flex align-items-center mb-3">
        <div class="d-md-flex align-items-center">
         <div class="filter-box me-md-2">
          <label class="d-block" for="date">Start Date</label>
          <input type="date" class="filters" id="date">
         </div>
         <span class="d-inline-block me-md-2 mt-md-4 prime-label">
          -
         </span>
         <div class="filter-box">
          <label class="d-block" for="date">End Date</label>
          <input type="date" class="filters" id="date2">
         </div>
        </div>
       </div>
      </div>
      <div class="col-xl-4 col-md-7">
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
              <th>Session ID</th>
              <th>Session Name</th>
              <th>Price</th>
              <th>Action</th>
             </tr>
            </thead>
            <tbody>
             <tr class="tableRow">
              <td>01</td>
              <td>01</td>
              <td>Session Abc</td>
              <td>$20</td>
              <td>
               <div class="btn-group">
                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                <div class="dropdown-menu text-left custom-dropdown">
                 <a class="dropdown-item" href="userDetails.php"><i class="far fa-eye"></i>Details</a>
                </div>
               </div>
              </td>
             </tr>
             <tr class="tableRow">
              <td>01</td>
              <td>01</td>
              <td>Session Abc</td>
              <td>$20</td>
              <td>
               <div class="btn-group">
                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                <div class="dropdown-menu text-left custom-dropdown">
                 <a class="dropdown-item" href="userDetails.php"><i class="far fa-eye"></i>Details</a>
                </div>
               </div>
              </td>
             </tr>
             <tr class="tableRow">
              <td>01</td>
              <td>01</td>
              <td>Session Abc</td>
              <td>$20</td>
              <td>
               <div class="btn-group">
                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                <div class="dropdown-menu text-left custom-dropdown">
                 <a class="dropdown-item" href="userDetails.php"><i class="far fa-eye"></i>Details</a>
                </div>
               </div>
              </td>
             </tr>
             <tr class="tableRow">
              <td>01</td>
              <td>01</td>
              <td>Session Abc</td>
              <td>$20</td>
              <td>
               <div class="btn-group">
                <button type="button" class="btn transparent-btn ellipsis-btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                <div class="dropdown-menu text-left custom-dropdown">
                 <a class="dropdown-item" href="userDetails.php"><i class="far fa-eye"></i>Details</a>
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