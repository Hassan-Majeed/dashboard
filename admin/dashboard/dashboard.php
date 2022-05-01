<?php
$title = "Dashboard";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
 <div class="content-wrapper">
  <div class="content-body">
   <!-- Basic form layout section start -->
   <section id="configuration">
    <h1 class="section-heading font-commons my-5">Dashboard</h1>
    <!-- Dashboard Analytics  -->
    <div class="row mb-5">
     <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 mx-md-0 mx-auto">
      <div class="boxDetails d-flex mb-2">
       <div class="box-icon me-2">
        <i class="fas fa-user"></i>
       </div>
       <div class="flex-grow-1">
        <h6 class="analytics-text-lg fw-400 ltGray">Total Subscription Sales</h6>
        <div class="d-xl-flex">
         <h6 class="analytics-text-md fw-800">3,2560</h6>
         <div class="map-wrap text-end">
          <img src="../../images/map1.png" alt="map" class="img-fluid">
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 mx-md-0 mx-auto">
      <div class="boxDetails d-flex mb-2">
       <div class="box-icon me-2 bg-red ">
        <i class="fas fa-box-open"></i>
       </div>
       <div class="flex-grow-1">
        <h6 class="analytics-text-lg fw-400 ltGray">Total Subscription Sales</h6>
        <div class="d-xl-flex">
         <h6 class="analytics-text-md fw-800">5,2860</h6>
         <div class="map-wrap text-end">
          <img src="../../images/map2.png" alt="map" class="img-fluid">
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 mx-md-0 mx-auto">
      <div class="boxDetails d-flex mb-2">
       <div class="box-icon me-2 bg-green">
        <i class="fas fa-wallet"></i>
       </div>
       <div class="flex-grow-1">
        <h6 class="analytics-text-lg fw-400 ltGray">Total Subscription Sales</h6>
        <div class="d-xl-flex">
         <h6 class="analytics-text-md fw-800">$9,254</h6>
         <div class="map-wrap text-end">
          <img src="../../images/map3.png" alt="map" class="img-fluid">
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- Amount Analytics Starts -->
    <h1 class="section-heading font-commons my-5">Amount Analytics</h1>
    <div class="row">
     <div class="col-12">
      <div class="box mb-lg">
       <div class="alignment-end d-md-flex text-center">
        <div class="alignment-xy d-flex">
         <div class="me-3">
          <span class="d-block show-color bg-red"></span>
          <p>Amount earned</p>
         </div>
         <div class="me-3">
          <span class="d-block show-color bg-black"></span>
          <p>Year</p>
         </div>
        </div>
        <select name="" id="" class="prime-select">
         <option value="year">year</option>
         <option value="2020">2020</option>
         <option value="2021">2021</option>
         <option value="2022">2022</option>
        </select>
       </div>
       <div class="map-wrapper mb-4">
        <img src="../../images/map.png" class="img-fluid" alt="map">
       </div>
      </div>
     </div>
    </div>
   </section>
  </div>
 </div>
</div>
<?php include('../layout/footer.php') ?>