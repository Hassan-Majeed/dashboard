<?php
$title = "Program Details";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <!-- Program Details Starts -->
        <div class="d-flex align-items-center my-3">
          <i class="fas fa-chevron-left pe-3 go-back-icon section-heading"></i>
          <h6 class="section-heading font-commons mb-0">Program Details</h6>
        </div>
        <div class="box">
          <div class="text-end">
            <a href="#_" class="textDanger"><i class="far fa-edit"></i><u>Edit</u></a>
          </div>
          <div class="row">
            <div class="col-xxl-3 col-xl-5">
              <div class="program-img-wrap mb-4">
                <img src="../../images/programImg.png" alt="programImg" class="img-fluid">
              </div>
            </div>
            <div class="col-xxl-5 col-xl-8 col-lg-10">
              <div class="mb-4">
                <h2 class="section-heading font-commons mb-2">Program Abc</h2>
                <p class="ltGray font-light">7 Days a Week for Kundalini Yoga & Meditation, Gong and Breathwork classes.</p>
              </div>
              <h6 class="font-light mb-3">By Trainer: John Doe</h6>
              <h5 class="font-light ltGray"><span class="textDanger section-heading">$20</span> for 60 mins Sessions</h5>
            </div>
            <!-- ===============  DATE & Time table starts ===================== -->
            <div class="row">
              <div class="col-xl-8 col-lg-10">
                <div class="main-tabble table-responsive">
                  <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                      <div class="col-12">
                        <table class="table table-borderless dataTable">
                          <thead>
                            <tr class="custom-table">
                              <th class="font-commons">Days & Time</th>
                              <th class="font-commons"></th>
                              <th class="font-commons">Start Time</th>
                              <th class="font-commons"></th>
                              <th class="font-commons">End Time</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="custom-table">
                              <td>Monday</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>11:00 am</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>05:00 pm</td>
                            </tr>
                            <tr class="custom-table">
                              <td>Tuesday</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>11:00 am</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>05:00 pm</td>
                            </tr>
                            <tr class="custom-table">
                              <td>Wednesday</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>11:00 am</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>05:00 pm</td>
                            </tr>
                            <tr class="custom-table">
                              <td>Thursday</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>11:00 am</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>05:00 pm</td>
                            </tr>
                            <tr class="custom-table">
                              <td>Friday</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>11:00 am</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>05:00 pm</td>
                            </tr>
                            <tr class="custom-table">
                              <td>Saturday</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>11:00 am</td>
                              <td class="textDanger">&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;&#8211;</td>
                              <td>05:00 pm</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- =================  DATE & Time table ends   ====================== -->
          </div>
        </div>
    </div>
    <!-- Program Details Ends -->
    </section>
  </div>
</div>
</div>
<?php include('../layout/footer.php') ?>