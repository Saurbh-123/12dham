<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

@include("admin.layouts.admin-head")
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
@include("admin.layouts.admin-header")
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="mb-0">{{$page_name??''}}</h5>
              </div>
            </div>
            <div class="col-md-12">
              <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header" >
               <h5 style="float: left">
             {{  isset($page) ? __('Add Train') : __('Edit Train')}}
               </h5>
            </div>
            <div class="card-body">

                @livewire('train')

          </div>
        </div>

      </div>

    </div>
  </div>
  @include("admin.layouts.admin-footer")
