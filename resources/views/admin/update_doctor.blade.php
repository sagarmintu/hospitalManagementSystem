<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
            <div class="container" style="padding-top: 100px;">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                @endif

                <h1>Update Doctor</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{url('edit_doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Doctor Name</label>
                                <input type="text" style="color: #000;" name="name" class="form-control"
                                    value="{{$data->name}}" placeholder="Enter Doctor Name" required>
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Phone Number</label>
                                <input type="text" style="color: #000;" name="phone" class="form-control"
                                    value="{{$data->phone}}" placeholder="Enter Phone Number" required>
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Speciality</label>
                                <input type="text" style="color: #000;" name="speciality" class="form-control"
                                    value="{{$data->speciality}}" placeholder="Enter Speciality" required>
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Room Number</label>
                                <input type="text" style="color: #000;" name="room" class="form-control"
                                    value="{{$data->room}}" placeholder="Enter Room Number" required>
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Old Image</label>
                                <img src="doctorimage/{{$data->image}}" height="100px" width="100px">
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">New Image</label>
                                <input type="file" name="file" class="form-control">
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <input type="submit" name="Update" class="btn btn-success">
                            </div>

                        </form>
                    </div>
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