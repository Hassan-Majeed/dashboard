<?php
$title = "Edit Video";
$pg = "payment";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- On-demand Videos Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h1 class="section-heading font-commons my-2">Edit Video</h1>
        </div>
        <div class="box">
          <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-10">
              <form action="#">
                <div class="label-wrap mb-3">
                  <label for="videoTitle" class="d-block mb-2 ms-md-4">Video Title<span class="text-danger">*</span> </label>
                  <input id="videoTitle" type="text" class="profileInp" placeholder="Enter Title" value="Title Abc">
                </div>
                <div class="label-wrap mb-3">
                  <label for="description" class="d-block mb-2 ms-md-4">Description<span class="text-danger">*</span> </label>
                  <input id="description" type="text" class="profileInp" placeholder="Enter Description" value="Lorem ipsum dolor sit amet, consetetur sadipscing elitr">
              </div>
                <div class="label-wrap mb-3">
                  <label for="uploadVideo" class="d-block mb-2 ms-md-4">Video<span class="text-danger">*</span> </label>
                  <div class="videoWrapper shadow-none">
                    <video controls poster="../../images/sideImg.png" class="mb-3">
                      <source src="../../images/videos/video7.mp4" type="video/mp4">
                    </video>
                  </div>
                  <div class="text-end">
                    <button class="notBtn textDanger me-2">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="notBtn textDanger" type="button" onclick="document.getElementById('uploadVideos').click()">
                      <u>Upload</u>
                    </button>
                    <input type="file" class="d-none" id="uploadVideos">
                  </div>
                </div>
                <div class="label-wrap mb-3">
                  <label for="thumbnail*" class="d-block mb-2 ms-md-4">Thumbnail<span class="text-danger">*</span> </label>
                  <div class="thumbnail-wrapper mb-3">
                    <img src="../../images/sideimg.png" alt="Thumbnail" class="img-fluid">
                  </div>
                  <div class="text-end">
                    <button class="notBtn textDanger me-2">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="notBtn textDanger" type="button" onclick="document.getElementById('uploadthumbnail').click()">
                      <u>Upload</u>
                    </button>
                    <input type="file" class="d-none" id="uploadthumbnail">
                  </div>
                </div>
                <button class="main-primarybtns my-2" type="button" data-bs-toggle="modal" data-bs-target="#videoUpdated">Update</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?php include('../layout/footer.php') ?>
<!-- Video Added  Modal -->
<div class="modal fade" id="videoUpdated" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Video Updated Successfully!</h6>
      </div>
    </div>
  </div>
</div>