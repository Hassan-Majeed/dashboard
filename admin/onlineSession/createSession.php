<?php
$title = "Create Session";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Add New Program Starts -->
        <h6 class="section-heading font-commons mb-0">Create Session</h6>
        <div class="box">
          <form action="#">
            <div class="row mt-5">
              <div class="col-xxl-8 col-lg-10 ">
                <div class="row">
                  <div class="col-lg-6 col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="title" class="d-block ms-md-3 mb-2">Session Title<span class="text-danger">*</span> </label>
                      <input type="text" id="title" class="profileInp" placeholder="Enter Session Title">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="prices" class="d-block ms-md-3 mb-2">Session Prices<span class="text-danger">*</span> </label>
                      <input type="text" id="prices" class="profileInp" placeholder="Enter Session Prices">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="date" class="d-block ms-md-3 mb-2">Date<span class="text-danger">*</span> </label>
                      <input type="date" id="date" class="profileInp">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="time" class="d-block ms-md-3 mb-2">Time<span class="text-danger">*</span> </label>
                      <input type="time" id="time" class="profileInp">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="duration" class="d-block ms-md-3 mb-2">Duration<span class="text-danger">*</span> </label>
                      <input type="text" id="duration" class="profileInp" placeholder="Enter Duration">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="seats" class="d-block ms-md-3 mb-2">Total Seats<span class="text-danger">*</span> </label>
                      <input type="number" id="seats" class="profileInp" placeholder="Enter Total No. Of Seats">
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
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="description" class="d-block ms-md-3 mb-2">Description<span class="text-danger">*</span> </label>
                      <input type="text" id="description" class="profileInp" placeholder="Enter Description">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="main-primarybtns my-2 mx-md-3" type="button" data-bs-toggle="modal" data-bs-target="#newSessionCreated">Publish</button>
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
<!-- New Session Created Modal -->
<div class="modal fade" id="newSessionCreated" tabindex="-1" aria-labelledby="NewSessionCreatedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">New Session Created Successfully!</h6>
      </div>
    </div>
  </div>
</div>