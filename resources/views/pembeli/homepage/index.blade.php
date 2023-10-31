<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:28:13 GMT -->

<head>
    @include('pembeli.layout.head')
    <title>Pawrfect Ecommerce</title>
</head>

<body class="home-pages-2">

    @include('pembeli.homepage.header')

    @yield('slider')

    <div class="h2-services-area">
        @yield('services')
    </div>

    @yield('about-us')

    @yield('working-process')

    @yield('contact')

    @yield('testimony')

    @yield('our-team')

    @yield('blogs')


    @include('pembeli.layout.footer')
@include('pembeli.layout.js')
</body>

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:28:34 GMT -->

</html>