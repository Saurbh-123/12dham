<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col my-1">
          <p class="m-0"
            > {{\App\Models\Setting::where('id',1)->first()->name}} &#9829; Email  : {{\App\Models\Setting::where('id',1)->first()->setting_email}}  <a href="https://codedthemes.com/" target="_blank">Codedthemes</a></p
          >
        </div>

      </div>
    </div>
  </footer>

  <!-- [Page Specific JS] start -->
  <!-- apexcharts js -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('notie/dist/notie.min.js') }}"></script>
  <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
  <script src="{{ asset('/assets/js/plugins/apexcharts.min.js') }}" ></script>
  <script src="{{ asset('/assets/js/plugins/jsvectormap.min.js') }}"></script>
  <script src="{{ asset('/assets/js/plugins/world.js') }} "></script>
  <script src="{{ asset('/assets/js/pages/dashboard-default.js') }} "></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="{{ asset('/assets/js/plugins/popper.min.js') }} "></script>
  <script src="{{ asset('/assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('/assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/js/fonts/custom-font.js') }} "></script>
  <script src="{{ asset('/assets/js/plugins/feather.min.js') }} "></script>
  <script src="{{ asset('/assets/js/pcoded.js') }} "></script>
  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_caption_change('true');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>layout_theme_sidebar_change('false');</script>
  <script src="{{ asset('js/custome.js') }}"></script>

</body>
<!-- [Body] end -->
</html>
