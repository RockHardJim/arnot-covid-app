@extends('partials.site')
@section('content')
    @include('partials.navbar')
    <section class="prevention_banner">
        <div class="container">
            <div class="prevention_text">
                <h6 class="wow fadeInUp">What you need to do</h6>
                <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('guidelines') }}">Guidelines</a></li>
                </ul>
                <img class="img-fluid" src="assets/images/breadcrumb/prevention-persong.png" alt="">
            </div>
        </div>
    </section>

    <!--================Protect Yourself Area =================-->
    <section class="protect_yourself_area p_100">
        <div class="container">
            <div class="main_title_2 text-center">
                <h2 class="wow fadeInUp">Keep <span>social distance</span> to stay safe</h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s">With the number of COVID-19 cases increasing every
                    day, psychologists offer insights on how to
                    separate yourself from others, while still getting the social support you need.</p>
            </div>
            <div class="row protect_inner flex-row-reverse">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h5>What you need to do</h5>
                        <h2>How to protect yourself?</h2>
                    </div>
                    <div class="row protect_list_inner">
                        <div class="col-6">
                            <div class="protect_list_item">
                                <div class="protect_list_title">
                                    <h3>You should do</h3>
                                    <h6>Be sure to follow it</h6>
                                </div>
                                <ul class="nav flex-column">
                                                                        <li>
                                        <a href="#"><i class="linearicons-man-woman"></i>Social
                                            distance</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-home4"></i>Stay at home</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-desk-tape"></i>Wear mask</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-tissue"></i>Always use
                                            tissues</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-couch"></i>Disinfect your
                                            home</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-rain"></i>Wash your hands</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-thermometer"></i>Frequent
                                            self-isolation</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-bottle"></i>Frequent
                                            waterintake</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="protect_list_item red">
                                <div class="protect_list_title">
                                    <h3>You should avoid</h3>
                                    <h6>Be sure to follow it</h6>
                                </div>
                                <ul class="nav flex-column">

                                    <li>
                                        <a href="#"><i class="linearicons-paw"></i>Avoid animals</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-woman"></i>Don't touch your
                                            face</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-hand"></i>Avoid handshaking</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-chair"></i>Avoid infected
                                            surfaces</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-drop-crossed"></i>Avoid
                                            droplets</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-plane-crossed"></i>Don’t
                                            travel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="protect_img">
                        <img class="img-fluid" src="assets/images/protect-img-2.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prevent_area prevent_right">
        <div class="container">
            <div class="row prevent_inner flex-row-reverse">
                <div class="col-lg-6">
                    <div class="prevent_item_inner row">
                        <div class="col-sm-6">
                            <div class="prevent_item wow fadeInUp">
                                <div class="prevent_img">
                                    <img class="img-fluid" src="assets/images/prevent/prevent-1.png" alt="" />
                                </div>
                                <div class="prevent_text">
                                    <h4>Stay at home</h4>
                                    <p>
                                        Stay at home if you perceive the symptoms and consult
                                        your doctor on phone.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="prevent_item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="prevent_img">
                                    <img class="img-fluid" src="assets/images/prevent/prevent-2.png" alt="" />
                                </div>
                                <div class="prevent_text">
                                    <h4>Wash your hands often</h4>
                                    <p>
                                        Clean your hands with alcohol-based rub or wash them
                                        with soap for at least 20 seconds.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="prevent_item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="prevent_img">
                                    <img class="img-fluid" src="assets/images/prevent/prevent-3.png" alt="" />
                                </div>
                                <div class="prevent_text">
                                    <h4>Keep social distance</h4>
                                    <p>
                                        Keep at least 2 m distance between yourself & anyone if
                                        you go among people.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="prevent_item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="prevent_img">
                                    <img class="img-fluid" src="assets/images/prevent/prevent-4.png" alt="" />
                                </div>
                                <div class="prevent_text">
                                    <h4>Wear Facemask</h4>
                                    <p>
                                        When you are around other people and before you enter a
                                        healthcare provider’s.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="prevent_details">
                        <div class="prevent_details_text">
                            <h5>What should you do</h5>
                            <h2>How to prevent Coronavirus?</h2>
                            <p>
                                Some details about how the disease is spread are unknown and
                                is being determined.The WHO and CDC state that it is
                                primarily spread during close contact and by respiratory
                                droplets<br /> produced when people cough or sneeze; with close
                                contact being within 1 to 2 meters (3 to 6 feet). A study in
                                Singapore found that an uncovered coughing can lead to
                                droplets travelling up to 4.5 metres (15 feet).
                            </p>
                            <p>
                                Respiratory droplets may also be produced during breathing
                                out, including when talking, though the virus is not
                                generally airborne. These droplets can land in the mouths or
                                noses of people who are nearby or possibly be inhaled into
                                the lungs. Some medical procedures such as intubation and
                                cardiopulmonary...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection