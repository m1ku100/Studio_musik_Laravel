@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="service-area-4 fix" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>HUMAN</strong> CONFIRMATION</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 text-center">
                    <div class="w3-panel w3-card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="col-lg-12" style="padding: 3%">
                            <p align="justify">Because you've been this far, we're assuming that you are a living human.
                                But we need
                                to
                                make sure that you are not a robot.</p>
                            <form class="form-horizontal" action="{{route('submit_captcha')}}" method="post" id="form">
                                {{ csrf_field() }}
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <div class="g-recaptcha"
                                             data-sitekey="6LcIWT0UAAAAABvZpjZtcb123bkW5U3LlHMYDHQd"></div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <input type="submit" value="I'M NOT ROBOT!"
                                               class="btn btn-primary button btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <script>
                            $(function () {
                                $('#form').submit(function (event) {
                                    var verified = grecaptcha.getResponse();
                                    if (verified.length === 0) {
                                        event.preventDefault();
                                        alert('Please confirm us that you are not a robot, with clicking in the reCAPTCHA dialog-box.');
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection