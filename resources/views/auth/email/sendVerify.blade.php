@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="service-area-4 fix" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>E-MAIL</strong> VERIFICATION</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="w3-panel w3-card">
                        <div class="panel-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <h4>Check your e-mail!</h4>
                            @foreach($sql as $row)
                                <p align="justify">Registration success! We've sent a message to
                                    <strong>{{$row->email}}</strong>. Please check it and verify your e-mail with
                                    clicking "<strong>Activate Account</strong>" button to activate your account.</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection