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
                    <h1 style="text-alogn: center; margin-bottom: 10px; font-size: 22px;">Show Booking Appointment
                        Details
                    </h1>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr style="background-color: #000;">
                                <th style="padding-top: 10px; color: #fff;">Customer Name</th>
                                <th style="padding-top: 10px; color: #fff;">Email</th>
                                <th style="padding-top: 10px; color: #fff;">Phone</th>
                                <th style="padding-top: 10px; color: #fff;">Doctor Name</th>
                                <th style="padding-top: 10px; color: #fff;">Date</th>
                                <th style="padding-top: 10px; color: #fff;">Message</th>
                                <th style="padding-top: 10px; color: #fff;">Status</th>
                                <th style="padding-top: 10px; color: #fff;">Approved</th>
                                <th style="padding-top: 10px; color: #fff;">Canceled</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $datas)
                            <tr align="center" style="background-color: #000;">
                                <td style="padding: 10px; color: #fff;">{{$datas->name}}</td>
                                <td style="padding: 10px; color: #fff;">{{$datas->email}}</td>
                                <td style="padding: 10px; color: #fff;">{{$datas->phone}}</td>
                                <td style="padding: 10px; color: #fff;">{{$datas->doctor}}</td>
                                <td style="padding: 10px; color: #fff;">{{$datas->date}}</td>
                                <td style="padding: 10px; color: #fff;">{{$datas->message}}</td>
                                <td style="padding: 10px; color: #fff;"><span class="badge badge-secondary"
                                        style="color: #000;">{{$datas->status}}</span></td>
                                <td style="padding: 10px; color: #fff;">
                                    <a href="{{url('approved',$datas->id)}}" class="btn btn-success btn-sm">Approved</a>
                                </td>
                                <td style="padding: 10px; color: #fff;">
                                    <a href="{{url('cancelled',$datas->id)}}"
                                        class="btn btn-danger btn-sm">Cancelled</a>
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