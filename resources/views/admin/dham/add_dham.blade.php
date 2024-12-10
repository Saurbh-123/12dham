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
             {{  isset($page) ? __('Add Dham') : __('Edit Dham')}}
               </h5>
            </div>
            <div class="card-body">

            <form action="{{ isset($page) ? route('dham.store') : route('edit.dham.update',['slug'=>$dhames->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control" value="{{isset($dhames ) ? $dhames->name : old('name')}}" placeholder="Enter Dham Name">
                      </div>
                    </div>

                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" name="state_name" class="form-control" value="{{isset($dhames ) ? $dhames->state_name : old('state_name')}}" placeholder="State Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" name="state_code" value="{{isset($dhames ) ? $dhames->state_code : old('state_code')}}" class="form-control" placeholder="State Code">
                    </div>
                  </div>
                </div>

                  <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" name="district_name"  value="{{isset($dhames ) ? $dhames->district_name : old('district_name')}}" class="form-control" placeholder="District Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" name="district_code" class="form-control" value="{{isset($dhames ) ? $dhames->district_code : old('district_code')}}"  placeholder="District Code">
                    </div>
                  </div>
                </div>

                  <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" name="block_name" class="form-control" value="{{isset($dhames ) ? $dhames->block_name : old('block_name')}}" placeholder="Block Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-3">
                      <input type="text" name="block_code" class="form-control" value="{{isset($dhames ) ? $dhames->block_code : old('block_code')}}"  placeholder="Block Code">
                    </div>
                  </div>
                </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-3">
                      <input type="text" name="vilage_name" class="form-control" value="{{isset($dhames ) ? $dhames->vilage_name : old('vilage_name')}}"  placeholder="Vilage Name">
                    </div>
                  </div>


                    <div class="col-sm-12">
                      <div class="form-group mb-3">
                        <input type="text" name="place_localname" value="{{isset($dhames ) ? $dhames->place_localname : old('place_localname')}}" class="form-control" placeholder="Place Local Name">
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group mb-3">
                            <input type="text" name="drop_station" value="{{isset($dhames ) ? $dhames->drop_station : old('drop_station')}}" class="form-control" placeholder="Drop station">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group mb-3">
                            <input type="text" name="catch_station" value="{{isset($dhames ) ? $dhames->catch_station : old('catch_station')}}" class="form-control" placeholder="Catch station">
                          </div>
                        </div>
                      </div>

                        <div class="col-sm-6">
                          <div class="form-group mb-3">
                            <input type="text" name="route_name" value="{{isset($dhames ) ? $dhames->route_name : old('route_name')}}" class="form-control" placeholder="Route name">
                          </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group mb-3">
                                <input type="text" name="drop_station" value="{{isset($dhames ) ? $dhames->drop_station : old('drop_station')}}"class="form-control" placeholder="Drop station">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group mb-3">
                                <input type="text" name="catch_station" value="{{isset($dhames ) ? $dhames->catch_station : old('catch_station')}}"class="form-control" placeholder="Catch station">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-6">
                         <button type="submit" class="btn btn-primary">{{isset($page) ? __('Submit') :__('Update')}}</button>
                          </div>
                        </form>
          </div>
        </div>

      </div>

    </div>
  </div>
  @include("admin.layouts.admin-footer")
