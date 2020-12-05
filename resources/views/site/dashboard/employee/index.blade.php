@extends('partials.site')
@section('content')
    @include('partials.navbar')
    <div class="pagepiling">
        <div class="pp-scrollable section active">
            <div class="scroll-wrap">
                <div class="p-section-bg" style="background-image:url('./assets/images/pattern_1.png');">
                </div>
                <div class="scrollable-content">
                    <div class="container">
                        <div class="virus_checker_content">
                            <div class="main_title">
                                <h5>Hi {{ Auth::user()->name .' '. Auth::user()->surname }}</h5>
                            </div>
                            
                            <div class="main_title">
                            <h5>We have created this tool to ensure covid19 tracking in the office is ran safely and without physical contact</h5>
                             </div>
                            <div class="row appointment_box">
                                <div class="col-lg-4 appoinment_features">
                                    <div class="shape one" data-parallax='{"y": 100}'>
                                        <img src="{{ asset('assets/images/appoinment/a_img1.png')}}" alt="" />
                                    </div>
                                    <div class="shape two">
                                        <img src="{{ asset('assets/images/appoinment/a_img2.png')}}" alt="" />
                                    </div>
                                    <div class="shape three">
                                        <img src="{{ asset('assets/images/appoinment/a_img3.png')}}" alt="" />
                                    </div>
                                    <div class="shape four" data-parallax='{"x": 30}'>
                                        <img src="{{ asset('assets/images/appoinment/a_img4.png')}}" alt="" />
                                    </div>
                                    <div class="shape five">
                                        <img src="{{ asset('assets/images/appoinment/a_img5.png')}}" alt="" />
                                    </div>
                                    <div class="shape six" data-parallax='{"y": 50}'>
                                        <img src="{{ asset('assets/images/appoinment/a_img6.png')}}" alt="" />
                                    </div>
                                    <h4>User Dashboard</h4>
                                    <p class="main_title">
                                       
                                    </p>
                                    

                                <p> Hi please use the options as given on the sidebar to ensure covid19 compliance.</p>
</div>
                                <div class="col-lg-8">
                                            <div class="appoinment_form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <a href="{{ route('checkin', 1) }}"><button class="green_btn" id="submit">
                                                                CHECK-IN
                                                            </button></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <button class="green_btn" id="submit">
                                                               TOKENS
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <a href="{{ route('guidelines') }}"><button class="green_btn" id="submit">
                                                                GUIDELINES
                                                                </button></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                           <a href="{{ route('tracker') }}"><button class="green_btn" id="submit">
                                                                TRACKER
                                                            </button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection