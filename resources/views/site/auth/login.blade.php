@extends('partials.site')
@section('content')
    @include('partials.navbar')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area boi_breadcrumb">
        <div class="container">
            <div class="breadcrumb_text">
                <h6 class="wow fadeInUp">Login into your self-checkin account</h6>
                <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
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
                    <h2>Login</h2>
                    <p>
Please enter your details to be redirected to your respective user screen
                    </p>
                </div>
                <div class="col-lg-8">
                    <form action="{{ route('ajax.login') }}" id="login_form" method="post" class="appoinment_form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="email" name="email" placeholder="" />
                                    <label><i class="linearicons-envelope-open"></i>Your Email
                                        Address</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" type="password" id="password" name="password" placeholder="" />
                                    <label>PASSWORD</label>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-control">
                                        <label>Dont have an account?
                                            <span><a href="{{ route('register') }}">Register</a>.</span></label>
                                    </div>
                                    <button type="submit" class="green_btn" id="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        </div>
    </section>
    @include('partials.footer')
@endsection

@section('javascript')
    <script type="application/javascript">
        $(function() {
            'use strict';

            $("#login_form").on('submit',(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('ajax.login') }}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend : function()
                    {
                        $("#login_form").LoadingOverlay("show");
                        $('#submit').attr("disabled", true);
                    },
                    success: function(response)
                    {
                        if(response.status == 'failed'){
                            $("#login_form").LoadingOverlay("hide");
                            $('#submit').attr("disabled", false);
                            iziToast.error({title: 'OOPS!', position: 'center', message: response.message});

                        } else {
                            $("#login_form").LoadingOverlay("hide");
                            $('#submit').attr("disabled", false);
                            iziToast.success({title: 'Hey!', position: 'center', message: 'Hi we have logged you in successfully please close this notification to be redirected to your user menu'});

                            document.addEventListener('iziToast-closed', function(data){
                                window.location.replace('{{route('dashboard')}}');
                            });
                        }
                    }
                });
            }));
        });
    </script>
@endsection