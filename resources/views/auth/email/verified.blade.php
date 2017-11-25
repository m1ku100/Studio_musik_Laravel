@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="service-area-4 fix" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>NOT ROBOT</strong> CONFIRMATION</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="w3-panel w3-card">
                        <div class="panel-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <h4>Confirm us that you are a human!</h4>
                            <p>Because you've been this far, we're assuming that you are a living human. But we need to
                                make sure that you are not a robot.</p>
                            <form action="{{route('login/notrobot')}}" method="post" id="form">
                                {{ csrf_field() }}
                                <div class="g-recaptcha" data-sitekey="6LfDTyIUAAAAAA-o507HOltdHgxMAiCsKsm3G67b"></div>
                                <button type="submit" class="btn d-windows button btn-block"
                                        style="margin-top:15px;"><strong>I'M NOT ROBOT!</strong></button>
                            </form>
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
    </div>
@endsection