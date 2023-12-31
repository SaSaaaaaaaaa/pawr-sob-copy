@extends('pembeli.cart.index')
@section('breadcrumb')
<div class="inner-page-banner">
    <div class="breadcrumb-vec-btm">
        <img class="img-fluid" src="/assets/images/bg/inner-banner-btm-vec.png" alt>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-lg-6 align-items-center">
                <div class="banner-content">
                    <h1>Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img d-lg-block d-none">
                    <div class="banner-img-bg">
                        <img class="img-fluid" src="/assets/images/bg/inner-banner-vec.png" alt>
                    </div>
                    <img class="img-fluid" src="/assets/images/bg/inner-banner-img.png" alt>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('cart')
<div class="cart-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-wrapper">
                    <table class="eg-table table cart-table">
                        <thead>
                            <tr>
                                <th>Delete</th>
                                <th>Image</th>
                                <th>Food Name</th>
                                <th>Unite Price</th>
                                <th>Discount Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Delete">
                                    <div class="delete-icon">
                                        <i class="bi bi-x"></i>
                                    </div>
                                </td>
                                <td data-label="Image">
                                    <img src="/assets/images/bg/cart-01.png" alt>
                                </td>
                                <td data-label="Food Name"><a href="shop-details.html">Whiskas Cat Food Core
                                        Tuna</a></td>
                                <td data-label="Unite Price"><del>$30.00</del></td>
                                <td data-label="Discount Price">$25.00</td>
                                <td data-label="Quantity">
                                    <div class="quantity d-flex align-items-center">
                                        <div class="quantity-nav nice-number d-flex align-items-center">
                                            <input type="number" value="1" min="1">
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Subtotal">$25.006</td>
                            </tr>
                            <tr>
                                <td data-label="Delete">
                                    <div class="delete-icon">
                                        <i class="bi bi-x"></i>
                                    </div>
                                </td>
                                <td data-label="Image">
                                    <img src="/assets/images/bg/cart-02.png" alt>
                                </td>
                                <td data-label="Food Name"><a href="shop-details.html">Friskies Kitten
                                        Discoveries.</a></td>
                                <td data-label="Unite Price"><del>$49.00</del></td>
                                <td data-label="Discount Price">$39.00</td>
                                <td data-label="Quantity">
                                    <div class="quantity d-flex align-items-center">
                                        <div class="quantity-nav nice-number d-flex align-items-center">
                                            <input type="number" value="1" min="1">
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Subtotal">$39.00</td>
                            </tr>
                            <tr>
                                <td data-label="Delete">
                                    <div class="delete-icon">
                                        <i class="bi bi-x"></i>
                                    </div>
                                </td>
                                <td data-label="Image">
                                    <img src="/assets/images/bg/cart-03.png" alt>
                                </td>
                                <td data-label="Food Name"><a href="shop-details.html">Natural Dog Fresh Food.</a>
                                </td>
                                <td data-label="Unite Price">$30.00</td>
                                <td data-label="Discount Price">$18.00</td>
                                <td data-label="Quantity">
                                    <div class="quantity d-flex align-items-center">
                                        <div class="quantity-nav nice-number d-flex align-items-center">
                                            <input type="number" value="1" min="1">
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Subtotal">$18.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="coupon-area">
                    <div class="cart-coupon-input">
                        <h5 class="coupon-title">Coupon Code</h5>
                        <form class="coupon-input d-flex align-items-center">
                            <input type="text" placeholder="Coupon Code">
                            <button type="submit">Apply Code</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <table class="table total-table">
                    <thead>
                        <tr>
                            <th>Cart Totals</th>
                            <th></th>
                            <th>$128.70</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Shipping</td>
                            <td>
                                <ul class="cost-list text-start">
                                    <li>Shipping Fee</li>
                                    <li>Total ( tax excl.)</li>
                                    <li>Total ( tax incl.)</li>
                                    <li>Taxes</li>
                                    <li>Shipping Enter your address to view shipping options. <br> <a
                                            href="#">Calculate
                                            shipping</a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="single-cost text-center">
                                    <li>Fee</li>
                                    <li>$15
                                    </li>
                                    <li>
                                    </li>
                                    <li>$15</li>
                                    <li>$15</li>
                                    <li>$5</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td></td>
                            <td>$162.70</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="cart-btn-group">
                    <li><a href="shop.html" class="primary-btn2 btn-lg">Continue to shopping</a></li>
                    <li><a href="check-out.html" class="primary-btn3 btn-lg">Proceed to Checkout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection