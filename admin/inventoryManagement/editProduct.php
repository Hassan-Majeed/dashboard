<?php
$title = "Edit Product";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Add New Program Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">Edit Product</h6>
        </div>
        <div class="box"> 
          <form action="#">
            <div class="row mt-5">
              <div class="col-xl-8 order-xl-1 order-2">
                <div class="row flex-column">
                  <div class="col-lg-6 col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="title" class="d-block ms-md-3 mb-2">Product Title<span class="text-danger">*</span> </label>
                      <input type="text" id="title" class="profileInp" placeholder="Enter Product Title" value="Enter Product Title">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="prices" class="d-block ms-md-3 mb-2">Product Prices<span class="text-danger">*</span> </label>
                      <input type="text" id="prices" class="profileInp" placeholder="Enter Product Prices" value="Enter Product Title" >
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="description" class="d-block ms-md-3 mb-2">Description<span class="text-danger">*</span> </label>
                      <input type="text" id="description" class="profileInp" placeholder="Enter Description" value="Enter Description" >
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="prices" class="d-block ms-md-3 mb-2">Upload Picture<span class="text-danger">*</span> </label>
                      <div class="profileInp d-flex  alignment-xy-bw">
                        <span class="file-name">Upload Picture</span>
                        <button type="button" class="text-danger notBtn" onclick="document.getElementById('uploadFile').click()"> <small><u>Upload</u></small> </button>
                        <input type="file" class="d-none" id="uploadFile">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7  col-md-8 text-end">
                    <button class="notBtn textDanger my-3"> <u>+ Add Gallery Images</u> </button>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 order-xl-2 order-1">
                <div class="d-flex align-items-center justify-content-end d-block">
                    <h4 class="me-3 mb-0">Active</h4>
                    <input class="switch-inp" type="checkbox" id="switch" data-bs-toggle="modal" data-bs-target="#planInActive">
                    <label for="switch" class="switch-label mb-0"></label>
                    <h5 class="mb-0 ms-2">Inactive</h5>
                  </div> 
                </div>  
            </div> 
            <button class="main-primarybtns my-2 mx-md-3" type="button" data-bs-toggle="modal" data-bs-target="#newProductUpdate">Update</button>
          </form>
        </div>
    </div>
  </div>
  <!-- Add New Program Ends -->
  </section>
</div>

<?php include('../layout/footer.php') ?>
<script>
  document.getElementById('uploadFile').onchange = function() {
    var fileName = this.value;
    document.querySelector('.file-name').innerHTML = fileName;
  };
</script>
<!-- New Product Created Modal -->
<div class="modal fade" id="newProductUpdate" tabindex="-1" aria-labelledby="NewProductUpdateLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">New Product Created Successfully!</h6>
      </div>
    </div>
  </div>
</div>