<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
@include("admin.layouts.admin-head")
@livewireStyles();
  <!-- [Head] end -->
  <!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
 @include('admin.layouts.admin-nav')
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->

<!-- [ Header ] end -->

@include("admin.layouts.admin-header")
<!-- [ Main Content ] start -->

    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="mb-0">Home</h5>
                </div>
              </div>
              <div class="col-md-12">
                <ul class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ daily sales section ] start -->
          <div class="col-md-6 col-xl-4">
              <div class="card">
                  <div class="card-body">
                      <h6 class="mb-4">Daily Sales</h6>
                      <div class="row d-flex align-items-center">
                          <div class="col-9">
                              <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-success f-30 m-r-10"></i>$249.95</h3>
                          </div>
                         @livewire('test');
                          <div class="col-3 text-end">
                              <p class="m-b-0">67%</p>
                          </div>
                      </div>
                      <div class="progress m-t-30" style="height: 7px;">
                          <div class="progress-bar bg-brand-color-1" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
    </div>


@livewireScripts();
 @include("admin.layouts.admin-footer")
