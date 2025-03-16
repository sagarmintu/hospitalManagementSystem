<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div align="center" style="padding-top: 100px;">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <h1 style="text-alogn: center; margin-bottom: 10px; font-size: 22px;">Show Doctors
                        Details
                    </h1>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr style="background-color: #000;">
                                <th style="padding-top: 10px; color: #fff;">Name</th>
                                <th style="padding-top: 10px; color: #fff;">Phone</th>
                                <th style="padding-top: 10px; color: #fff;">Specilaity</th>
                                <th style="padding-top: 10px; color: #fff;">Room</th>
                                <th style="padding-top: 10px; color: #fff;">Image</th>
                                <th style="padding-top: 10px; color: #fff;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctor as $doctors)
                            <tr align="center" style="background-color: #000;">
                                <td style="padding: 10px; color: #fff;">{{$doctors->name}}</td>
                                <td style="padding: 10px; color: #fff;">{{$doctors->phone}}</td>
                                <td style="padding: 10px; color: #fff;">{{$doctors->speciality}}</td>
                                <td style="padding: 10px; color: #fff;">{{$doctors->room}}</td>
                                <td style="padding: 10px;">
                                    <img src="doctorimage/{{$doctors->image}}" height="100px" width="100px">
                                </td>
                                <td colspan="2">
                                    <a href="{{url('update_doctor',$doctors->id)}}"
                                        class="btn btn-success btn-sm">Edit</a>

                                    <a onclick="confirm('Are You Sure, You want to delete?')"
                                        href="{{url('delete_doctor',$doctors->id)}}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>