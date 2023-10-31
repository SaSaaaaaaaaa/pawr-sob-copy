<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/error.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:29:45 GMT -->

<head>
@include('pembeli.layout.head')
<title>404 Error</title>
</head>

<body>

    @include('pembeli.error.header')

    <div class="error-page mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-wrapper">
                        <div class="error-img">
                            <img class="img-fluid" src="/assets/images/bg/error-img.png" alt>
                        </div>
                    </div>
                    <div class="error-content-area">
                        <h2>Something Went Wrong</h2>
                        <p>Donec bibendum enim ut elit porta ullamcorper. Vestibulum Nai quam nulla, venenatis eget
                            dapibus ac, catali topuny wekemdini iaculis vitae nulla. Morbi mattis nec mi ac mollis. </p>
                        <div class="error-btn">
                            <a class="primary-btn1" href="{{route('homepage')}}"><img src="/assets/images/icon/home-icon.svg" alt>
                                Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pembeli.layout.js')
</body>

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/error.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:29:46 GMT -->

</html>