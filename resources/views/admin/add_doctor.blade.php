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

        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container">
                <h1>Add Doctor</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Doctor Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Doctor Name">
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Speciality</label>
                                <select name="speciality" class="form-control" style="color: #fff;">
                                    <option value="">-- Select --</option>
                                    <option value="skin">Skin</option>
                                    <option value="eye">Eye</option>
                                    <option value="heart">Heart</option>
                                    <option value="nose">Nose</option>
                                </select>
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Room Number</label>
                                <input type="text" name="room" class="form-control" placeholder="Enter Room Number">
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <label for="">Doctor Image</label>
                                <input type="file" name="file" class="form-control">
                            </div>

                            <div class="form-group" style="padding-top: 15px;">
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.script')
</body>

</html>