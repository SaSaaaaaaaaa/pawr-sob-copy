<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/{{route('contact-us')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:32:14 GMT -->

<head>
    @include('pembeli.layout.head')
    <title>Contact Us</title>
</head>

<body>

    @include('pembeli.contact-us.header')

    @yield('breadcrumb')

    <div class="contact-pages pt-120 mb-120">
        <div class="container">
            @yield('contact-form')
        </div>
    </div>
    <div class="location-map">
        @yield('location-map')
    </div>


    @include('pembeli.layout.footer')

    @include('pembeli.layout.js')
</body>

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/{{route('contact-us')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:32:15 GMT -->

</html>