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
            {{-- <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="mb-0">Sample Page</h5>
              </div>
            </div> --}}
            <div class="col-md-12">
              <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Dham List</a></li>

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
               <h5 style="float: right">

                <a href="{{ route('add.dham') }}" class="badge me-2 bg-brand-color-1 text-white f-12">Add Dham</a>

               </h5>
            </div>

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

table th, table td {
    text-align: left;
    padding: 8px;
    border: 1px solid #ddd;
}

table th {
    background-color: #f4f4f4;
}

div {
    overflow-x: auto;
}


</style>
            <div class="card-body">


                <div style="overflow-x: auto; width: 100%;">
                    <table style="width: 100%;" id="dham-list" class="display">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>District Name</th>
                                <th>District Code</th>
                                <th>State Name</th>
                                <th>State Code</th>
                                <th>Block Name</th>
                                <th>Block Code</th>
                                <th>Village Name</th>
                                <th>Place Localname</th>
                                <th>Drop Station</th>
                                <th>Catch Station</th>
                                <th>Route Name</th>
                                <th>Create Date</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dhamlist as $key => $dham)
                                <tr>
                                    <td>{{ ($key + 1) }}</td>
                                    <td>{{ $dham->name }}</td>
                                    <td>{{ $dham->district_name }}</td>
                                    <td>{{ $dham->district_code }}</td>
                                    <td>{{ $dham->state_name }}</td>
                                    <td>{{ $dham->state_code }}</td>
                                    <td>{{ $dham->block_name }}</td>
                                    <td>{{ $dham->block_code }}</td>
                                    <td>{{ $dham->village_name }}</td>
                                    <td>{{ $dham->place_localname }}</td>
                                    <td>{{ $dham->drop_station }}</td>
                                    <td>{{ $dham->catch_station }}</td>
                                    <td>{{ $dham->route_name }}</td>
                                    <td>{{ $dham->created_date }}</td>
                                    <td><a href="{{ route('delete.dham', ['slug'=>$dham->id]) }}" class="btn btn-danger">Delete</a><a href="{{ route('edit.dham',['slug' => $dham->id]) }}" class="btn btn-primary">Update</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>



          </div>

        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
  @include("admin.layouts.admin-footer")
