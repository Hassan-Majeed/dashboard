<script src="../../app-assets/vendors/js/vendors.min.js"></script>
<script src="../../app-assets/js/core/app-menu.js"></script>
<script src="../../app-assets/js/core/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="../../assets/js/function.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie_svg.min.js?ver=1.0.0'></script>

<!--  Logout Modal Confirmation Start -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modalAnimation" id="logoutAnim">
        </div>
        <div class="main-modal-msg pb-2">
          <h3 class="modal-title section-headings fontEvempire">System Message</h3>
          <h4 class="main-modal-title text-center fontJost">Are you sure you want to Logout?</h4>
        </div>
      </div>
      <div class="modal-footer pb-5">
        <div class="main-modal-btns mb-2 d-flex justify-content-center align-items-center px-md-2">
          <button class="btn btn-primary btn-shape secondary_btn me-md-2" data-bs-toggle="modal" data-bs-target="#confirmLogout" data-bs-dismiss="modal">Yes</button>
          <a href="#_" class="btn btn-primary btn-shape secondary_btn" data-bs-dismiss="modal">No</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  Logout Modal Confirmation End -->

<!-- Logout Modal Confirmed Start -->
<div class="modal fade" id="confirmLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modalAnimation" id="systemAnim">
        </div>
        <div class="main-modal-msg pb-2">
          <h3 class="modal-title section-headings fontEvempire">System Message</h3>
          <h4 class="main-modal-title text-center fontJost">successfully logged out</h4>
        </div>
      </div>
      <div class="modal-footer pb-5">
        <div class="main-modal-btns mb-2 d-flex justify-content-center align-items-center px-md-2">
          <button class="btn btn-primary btn-shape secondary_btn me-md-2" data-bs-dismiss="modal" onclick="window.location.assign('../auth/login.php')">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  Logout Modal Confirmed End  -->
<script>
  // Pre Loader Cosde
  // setTimeout(function() {
  //   $('#ctn-preloader').addClass('loaded');
  //   $('body').removeClass('no-scroll-y');
  //   if ($('#ctn-preloader').hasClass('loaded')) {
  //     $('#preloader').delay(1000).queue(function() {
  //       $(this).remove();
  //     });
  //   }
  // }, 600);
</script>

</body>

</html>