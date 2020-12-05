@extends('partials.quiz.app')
@section('content')
    @include('partials.quiz.navbar')
    <div class="container">
        <div id="form_container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div id="left_form">
                        <figure><img src="{{ asset('quiz/img/logo.png')}}" alt="" width="100" height="100"></figure>
                        <h2>CORONAVIRUS <span>Check-in Questionnaire</span></h2>
                        <p>Help yourself in decision-making whether to seek professional medical advice or not.</p>
                        <a href="#wizard_container" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                            <span id="location"></span>
                        </div>
                        <!-- /top-wizard -->
                        <form id="wrapped" action="{{ route('ajax.answer') }}" method="post">
                        @csrf
                            <div id="middle-wizard">
                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Have you traveled travelled outside of the province in the last 21 Days?</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="container_check version_2">Yes
                                                    <input type="checkbox" name="question_1[]" value="Yes" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">No
                                                    <input type="checkbox" name="question_1[]" value="No" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Have you recently been in contact with a person with Coronavirus?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                            <input type="radio" name="question_2" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">No
                                            <input type="radio" name="question_2" value="No" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <!-- /Start Branch ============================== -->
                                <div class="step" data-state="branchtype">
                                    <label class="custom add_top_10"></label>
                                    <h3 class="main_question"><i class="arrow_right"></i>Are you experiencing any difficulty in breathing?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                            <input type="radio" name="question_3" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">No
                                            <input type="radio" name="question_3" value="No" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <small>* Start branch radio based </small>
                                </div>

                                <!-- /difficulty in breathing > Yes ============================== -->
                                <div class="branch" id="Yes">
                                    <div class="step" data-state="No">
                                        <h3 class="main_question"><i class="arrow_right"></i>Please tick any one of the following symptoms that can be applies to you.</h3>
                                        <div class="form-group">
                                            <label class="container_check version_2">Shortness of breath or breathing very fast
                                                <input type="checkbox" name="question_4[]" value="Shortness of breath or breathing very fast" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Shortness of breath & Intense chest pain.
                                                <input type="checkbox" name="question_4[]" value="Shortness of breath & Intense chest pain" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">Cannot complete a long sentence in one breath.
                                                <input type="checkbox" name="question_4[]" value="Cannot complete a long sentence in one breath" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_check version_2">None of the above
                                                <input type="checkbox" name="question_4[]" value="None_Of_The_Above" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->

                                <!-- /difficulty in breathing > No ============================== -->
                                <div class="step" id="No">
                                    <h3 class="main_question"><i class="arrow_right"></i>Do you have fever higher than 39.5° C?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                            <input type="radio" name="question_5" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">No
                                            <input type="radio" name="question_5" value="No" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Do you have a runny nose?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                            <input type="radio" name="question_6" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">No
                                            <input type="radio" name="question_6" value="No" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Are you experiencing muscle aches, weakness, or lightheadedness?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                            <input type="radio" name="question_7" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">No
                                            <input type="radio" name="question_7" value="No" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="step">
                                    <h3 class="main_question"><i class="arrow_right"></i>Are you having diarrhea, stomach pain, vomiting?</h3>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Yes
                                            <input type="radio" name="question_8" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">No
                                            <input type="radio" name="question_8" value="No" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="submit step" id="end">
                                    <div class="summary">
                                        <div class="wrapper">
                                            <h3>Thank you for checking in!</h3>
                                            <p>We you will receive your single use token to sign in into your workplace if you do not receive any token please contact your line manager.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step last-->

                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" name="forward" class="forward">Next</button>
                                <button type="submit" name="process" id="submit" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div><!-- /Row -->
        </div><!-- /Form_container -->
    </div>
    <!-- /container -->


    <div class="container">
        <footer id="home" class="clearfix">
            <p>© {{ Date('Y') }} Arnot Opco</p>
        </footer>
        <!-- end footer-->
    </div>
@endsection

@section('javascript')
    <script type="application/javascript">
        $(function() {
            'use strict';

            $("#wrapped").on('submit',(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('ajax.answer') }}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend : function()
                    {
                        $('#submit').attr("disabled", true);
                    },
                    success: function(response)
                    {
                        if(response.status == 'failed'){
                            $('#submit').attr("disabled", false);
                            iziToast.error({title: 'OOPS!', position: 'center', message: response.message});

                        } else {
                            $('#submit').attr("disabled", false);
                            iziToast.success({title: 'Hey!', position: 'center', message: 'Hi we have logged you in successfully please close this notification to be redirected to your user menu'});

                            document.addEventListener('iziToast-closed', function(data){
                                window.location.replace('{{ url('app/checkedin') }}/'+response.token);
                            });
                        }
                    }
                });
            }));
        });
    </script>
@endsection