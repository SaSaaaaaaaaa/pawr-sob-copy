<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:29:46 GMT -->

<head>
    @include('pembeli.layout.head')
    <title>Shop</title>
</head>

<body>
    @include('pembeli.shop.header')

    @yield('breadcrumb')

    <div class="shop-page pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @yield('sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="row mb-50">
                        <div class="col-lg-12">
                            @yield('show')
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        @yield('collection-card')
                    </div>
                    <div class="row pt-70">
                        <div class="col-lg-12 d-flex justify-content-center">
                            @yield('pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('pembeli.layout.footer')

    @include('pembeli.layout.js')
</body>

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:29:48 GMT -->

</html>