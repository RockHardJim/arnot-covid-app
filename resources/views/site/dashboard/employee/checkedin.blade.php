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
                        <br />and we all have a part to play. The novel strain of<br />
                        coronavirus, has officially reached pandemic proportions.
                    </p>
                    <a class="main_btn wow fadeInLeft" data-wow-delay="300ms" href="{{ route('guidelines') }}">How to Prevent</a>
                </div>
                <div class="col-sm-5">
                    <img class="img-fluid wow fadeInRight" data-wow-delay="400ms"
                         src="assets/images/svg/home-banner-cleaner.svg" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="home_about_corona">
        <div class="container">
            <div class="danger_box alert-danger">
                <p><i class="linearicons-warning"></i> The self check-in tool allows us to effectively collect risk scores associated with your
                    return to office which in-turn allow us to automatically vet if you must stay at home or not.</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="symptom_instruction_text">
                        <h4>Instruction</h4>
                        <p>If you’re feeling under the weather but aren’t sure what it could be, an online symptom
                            checker can help you identify whether you need to seek immediate medical attention.
                        </p>
                        <p>
                            Hi {{ Auth::user()->name . ' '. Auth::user()->surname }} Thank you for completing your daily state of health check-in.
                                @if($scores <= 100)
                              It appears your risk score of {{ $scores }} allows you to check-in into your workplace without having manual authorization
                                    please ensure you are adhering to the guidelines as outlined <a href="{{ route('guidelines') }}">here</a> and ensure
                                    you maintain safe distance from your colleagues please click <a href="">here</a> to continue unto the center check-in page.
                               @endif
                            @if($scores < 200)
                                It appears your risk score of {{ $scores }} means you have certain degree of risk and as such your token will only be valid should your overall body temperature fall under the 37 Degree Celsius mark. Any fever detected automatically freezes your acccess token and your line manager will be contacted. You are still required to follow guidelines as stipulated <a href="{{ route('guidelines') }}">here</a> and ensure
                                you maintain safe distance from your colleagues please click <a href="">here</a> to continue unto the center check-in page.
                            @endif

                            @if($scores >= 200)
                                It appears you have been refused entry into Arnot Opco facilities due to high risk of Covid19 please contact your line manager for the way forward and please stay at home during this period.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection