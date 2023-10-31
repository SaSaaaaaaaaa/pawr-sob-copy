<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:29:48 GMT -->

<head>
    @include('pembeli.layout.head')
    <title>Shop Details</title>
</head>

<body>
    @include('pembeli.product.header')

    @yield('breadcrumb')

    <div class="shop-details-page pt-120 mb-120">
        <div class="container">
            @yield('product')
            @yield('product-details')
            <div class="row">
                <div
                    class="col-lg-12 d-flex flex-wrap align-items-center justify-content-md-between justify-content-start gap-2 mb-60">
                    <div class="inner-section-title">
                        <h2>Other Products</h2>
                    </div>
                    <div class="swiper-btn-wrap d-flex align-items-center">
                        <div class="slider-btn prev-btn-12">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="slider-btn next-btn-12">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            @yield('other-products')
        </div>
    </div>

    @include('pembeli.layout.footer')

    @include('pembeli.layout.js')
</body>

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 11:31:53 GMT -->

</html>