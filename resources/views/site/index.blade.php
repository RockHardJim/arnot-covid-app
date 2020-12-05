@extends('partials.site')
@section('content')
    @include('partials.navbar')
    <section class="home_banner_area">
        <div class="container">
            <div class="row home_banner_inner">
                <div class="col-sm-7">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">Stop COVID-19</h5>
                    <h3 class="wow fadeInUp" data-wow-delay="500ms">How can we fight together against Coronavirus?
                    </h3>
                    <p class="wow fadeInUp" data-wow-delay="400ms">
                        It’s never been clearer that we’re all global citizens,
                        <br />In a bid to respond to the global pandemic Arnot Opco Mine has ramped up its readiness to respond to the expected increase in Covid-19 cases among its employees and host communities..
                    </p>
                    <a class="main_btn wow fadeInLeft" data-wow-delay="300ms" href="{{ route('guidelines') }}">How to Prevent</a>
                    <div class="row home_option">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="300ms">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="linearicons-shield-check"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Protection</h4>
                                    <p>How to protect yourself</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="linearicons-pulse"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Symptoms</h4>
                                    <p>Check basic symptoms</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="img-fluid wow fadeInRight" data-wow-delay="400ms"
                         src="assets/images/svg/home-banner-cleaner.svg" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="check_now_area">
        <div class="container">
            <div class="row m-0 justify-content-between">
                <div class="left">
                    <div class="media">
                        <div class="d-flex">
                            <img src="assets/images/check-1.png" alt="" />
                            <img src="assets/images/check-2.png" alt="" />
                            <img src="assets/images/check-3.png" alt="" />
                        </div>
                        <div class="media-body">
                            <h4>Self checkin?</h4>
                            <p>
                                Try our simple workplace center checkin tool to report your state of health.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <a class="icon_btn wow fadeInRight" data-wow-delay="400ms" href="{{ route('checkin', 1) }}">Check-in Now <i
                                class="linearicons-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection