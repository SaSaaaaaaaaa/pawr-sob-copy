<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/{{route('cart')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:31:53 GMT -->

<head>
    @include('pembeli.layout.head')
    <title>Cart</title>
</head>

<body>

    @include('pembeli.cart.header')

    @yield('breadcrumb')

    @yield('cart')

    @include('pembeli.layout.footer')

    @include('pembeli.layout.js')
</body>

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/{{route('cart')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:31:56 GMT -->

</html>