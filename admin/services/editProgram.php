<?php
$title = "Edit Program";
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
          <h6 class="section-heading font-commons mb-0">Edit Program Abc</h6>
        </div>
        <div class="box">
          <form action="#">
            <div class="row mt-5">
              <div class="col-xl-8">
                <div class="row">
                  <div class="col-lg-6 col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="title" class="d-block mb-2 ms-md-3">Program Title<span class="text-danger">*</span> </label>
                      <input type="text" id="title" class="profileInp" value="Title Abc" placeholder="Enter Title">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="prices" class="d-block mb-2 ms-md-3">Prices Per Hour<span class="text-danger">*</span> </label>
                      <input type="text" id="prices" class="profileInp" value="$20" placeholder="Enter Prices">
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <div class="d-flex align-items-end">
                        <div class="w-100">
                          <label for="prices" class="d-block mb-2 ms-md-3">Upload Image<span class="text-danger">*</span> </label>
                          <img src="../../images/programImg.png" alt="image" class="uploaded-img">
                          <div class="text-end">
                            <button type="button" onclick="document.getElementById('uploadFile').click()" class="notBtn textDanger"><u>Upload</u></button>
                            <input type="file" class="d-none" id="uploadFile">
                          </div>
                        </div>
                        <button class="notBtn textDanger ms-3 mb-3">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-7">
                    <div class="label-wrap mb-4">
                      <label for="description" class="d-block mb-2 ms-md-3">Description<span class="text-danger">*</span> </label>
                      <input type="text" id="description" class="profileInp" value="Lorem ipsum dolor sit amet, consetetur sadipsc" placeholder="Enter description">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Set Days & Time -->
            <!-- ===============  DATE & Time table starts ===================== -->
            <h6 class="section-heading font-commons fw-400 mb-4 mt-5">Set Days & Time</h6>
            <div class="row">
              <div class="col-xl-8">
                <div class="main-tabble table-responsive">
                  <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table class="table table-borderless dataTable">
                      <thead>
                        <tr class="custom-table text-start">
                          <th class="font-commons">Days</th>
                          <th class="font-commons">Start Time</th>
                          <th class="font-commons">End Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="custom-table text-start">
                          <td>
                            <div class="days-selector">
                              <input type="radio" id="selectedDay1" name="day" class="selectDay">
                              <label for="selectedDay1" class="product-site-heading">Monday</label>
                            </div>
                          </td>
                          <td class="date-time">
                            <input type="time" id="startTime" class="date-time-inp">
                          </td>
                          <td class="date-time">
                            <input type="time" id="endTime" class="date-time-inp">
                          </td>
                        </tr>
                        <tr class="custom-table text-start">
                          <td>
                            <div class="days-selector">
                              <input type="radio" id="selectedDay2" name="day" class="selectDay">
                              <label for="selectedDay2" class="product-site-heading">Tuesday</label>
                            </div>
                          </td>
                          <td class="date-time">
                            <input type="time" id="startTime" class="date-time-inp">
                          </td>
                          <td class="date-time">
                            <input type="time" id="endTime" class="date-time-inp">
                          </td>
                        </tr>
                        <tr class="custom-table text-start">
                          <td>
                            <div class="days-selector">
                              <input type="radio" id="selectedDay3" name="day" class="selectDay">
                              <label for="selectedDay3" class="product-site-heading">Wednesday</label>
                            </div>
                          </td>
                          <td class="date-time">
                            <input type="time" id="startTime" class="date-time-inp">
                          </td>
                          <td class="date-time">
                            <input type="time" id="endTime" class="date-time-inp">
                          </td>
                        </tr>
                        <tr class="custom-table text-start">
                          <td>
                            <div class="days-selector">
                              <input type="radio" id="selectedDay4" name="day" class="selectDay">
                              <label for="selectedDay4" class="product-site-heading">Thursday</label>
                            </div>
                          </td>
                          <td class="date-time">
                            <input type="time" id="startTime" class="date-time-inp">
                          </td>
                          <td class="date-time">
                            <input type="time" id="endTime" class="date-time-inp">
                          </td>
                        </tr>
                        <tr class="custom-table text-start">
                          <td>
                            <div class="days-selector">
                              <input type="radio" id="selectedDay5" name="day" class="selectDay">
                              <label for="selectedDay5" class="product-site-heading">Friday</label>
                            </div>
                          </td>
                          <td class="date-time">
                            <input type="time" id="startTime" class="date-time-inp">
                          </td>
                          <td class="date-time">
                            <input type="time" id="endTime" class="date-time-inp">
                          </td>
                        </tr>
                        <tr class="custom-table text-start">
                          <td>
                            <div class="days-selector">
                              <input type="radio" id="selectedDay6" name="day" class="selectDay">
                              <label for="selectedDay6" class="product-site-heading">Saturday</label>
                            </div>
                          </td>
                          <td class="date-time">
                            <input type="time" id="startTime" class="date-time-inp">
                          </td>
                          <td class="date-time">
                            <input type="time" id="endTime" class="date-time-inp">
                          </td>
                        </tr>
                        <tr class="custom-table text-start">
                          <td>
                            <div class="days-selector">
                              <input type="radio" id="selectedDay7" name="day" class="selectDay">
                              <label for="selectedDay7" class="product-site-heading">Sunday</label>
                            </div>
                          </td>
                          <td class="date-time">
                            <input type="time" id="startTime" class="date-time-inp">
                          </td>
                          <td class="date-time">
                            <input type="time" id="endTime" class="date-time-inp">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <button class="main-primarybtns my-2 mx-md-3" type="button" data-bs-toggle="modal" data-bs-target="#programUpdate">Update</button>
            <!-- =================  DATE & Time table ends   ====================== -->
          </form>
        </div>
    </div>
  </div>
  <!-- Add New Program Ends -->
  </section>
</div>
<?php include('../layout/footer.php') ?>
<script>
  $(".days-selector").click(function() {
    $(this).parent().siblings().addClass("display-cell");
  });
</script>
<!-- Password Updated Modal -->
<div class="modal fade" id="programUpdate" tabindex="-1" aria-labelledby="programUpdateLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close customclose" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-header-content">
        <img src="../../images/done.png" class="modal-header-img" alt="Done">
      </div>
      <div class="modal-body text-center p-0 mt-3">
        <h6 class="modal-text">Program Updated Successfully!</h6>
      </div>
    </div>
  </div>
</div>