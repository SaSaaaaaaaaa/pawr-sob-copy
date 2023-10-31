@extends('pembeli.contact-us.index')
@section('breadcrumb')
<div class="inner-page-banner">
    <div class="breadcrumb-vec-btm">
        <img class="img-fluid" src="/assets/images/bg/inner-banner-btm-vec.png" alt>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-lg-6 align-items-center">
                <div class="banner-content">
                    <h1>Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
@section('contact-form')
<div class="row align-items-center g-lg-4 gy-5">
    <div class="col-lg-5">
        <div class="contact-left">
            <div class="hotline mb-80">
                <h3>Call Us Now</h3>
                <div class="icon">
                    <img src="/assets/images/icon/phone-icon4.svg" alt>
                </div>
                <div class="info">
                    <h6><a href="tel:+012-3456-789102">+012-3456-789102</a></h6>
                    <h6><a href="tel:+012-3456-789102">+012-3456-789102</a></h6>
                </div>
            </div>
            <div class="location">
                <h3>Call Us Now</h3>
                <div class="icon">
                    <img src="/assets/images/icon/location4.svg" alt>
                </div>
                <div class="info">
                    <h6><a href="#">168/170, Ave 01, Mirpur,<br>
                            Dhaka, Bangladesh</a></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="contact-form">
            <h2>Have Any Questions</h2>
            <form>
                <div class="row">
                    <div class="col-lg-12 mb-40">
                        <div class="form-inner">
                            <input type="text" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-40">
                        <div class="form-inner">
                            <input type="text" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-40">
                        <div class="form-inner">
                            <input type="text" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-40">
                        <div class="form-inner">
                            <textarea placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-inner">
                            <button class="primary-btn1">Send Message <i
                                    class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('location-map')
<div class="vector">
    <img src="/assets/images/bg/map-vector.png" alt>
</div>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48330.162702269045!2d-74.29798882771155!3d40.792034138683825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3ab00d85ee855%3A0x93a15ba40269dd0!2sWest%20Orange%2C%20NJ%2007052%2C%20USA!5e0!3m2!1sen!2sbd!4v1658243800106!5m2!1sen!2sbd"
    style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection