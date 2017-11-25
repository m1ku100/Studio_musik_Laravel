@extends('layouts.mst_dashboard_relog')

@section('content')
    <div class="service-area-4 fix" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>MEMBER</strong> REGISTER</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="w3-panel w3-card">
                        <div class="panel-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                    <label for="name" class="col-md-4 control-label">Full Name</label>
                                    <div class="col-md-6">
                                        <input placeholder="Full name" id="name" type="text" class="form-control"
                                               name="name"
                                               value="{{ old('name') }}" required autofocus>
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('nama_band') ? ' has-error' : '' }} has-feedback">
                                    <label for="nama_band" class="col-md-4 control-label">Band Name</label>
                                    <div class="col-md-6">
                                        <input placeholder="Band name" id="nama_band" type="text" class="form-control"
                                               name="nama_band"
                                               value="{{ old('nama_band') }}" required autofocus>
                                        <span class="glyphicon glyphicon-music form-control-feedback"></span>
                                        @if ($errors->has('nama_band'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('nama_band') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }} has-feedback">
                                    <label for="alamat" class="col-md-4 control-label">Address</label>
                                    <div class="col-md-6">
                                        <textarea placeholder="Address" id="alamat" type="text" class="form-control"
                                                  name="alamat"
                                                  value="{{ old('alamat') }}" required autofocus></textarea>
                                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                        @if ($errors->has('alamat'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }} has-feedback">
                                    <label for="no_telp" class="col-md-4 control-label">Phone</label>
                                    <div class="col-md-6">
                                        <input placeholder="Phone number" id="no_telp" type="text" class="form-control"
                                               name="no_telp"
                                               value="{{ old('no_telp') }}" onkeypress="return hanyaAngka(event, false)"
                                               maxlength="13" required autofocus>
                                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                        @if ($errors->has('no_telp'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('no_telp') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input placeholder="E-mail" id="email" type="email" class="form-control"
                                               name="email"
                                               value="{{ old('email') }}" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input placeholder="Password" id="password" type="password" class="form-control"
                                               name="password"
                                               required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm
                                        Password</label>

                                    <div class="col-md-6">
                                        <input placeholder="Retype password" id="password-confirm" type="password"
                                               class="form-control"
                                               name="password_confirmation" required>
                                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            Have an account? Login here!
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-auto">
                                        <div style="height: 25px; border-bottom: 1px solid rgba(0,0,0,0.1); text-align: center">
                                            <span style="font-size: 28px; background-color: #FFFFFF; padding: 0 10px;">or</span>
                                        </div>
                                        <br>
                                        <div class="col-sm-3">
                                            <a href="{{ url('/auth/facebook') }}"
                                               class="btn btn-block btn-social btn-facebook">
                                                <span class="fa fa-facebook"></span> Facebook
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{{ url('/auth/twitter') }}"
                                               class="btn btn-block btn-social btn-twitter">
                                                <span class="fa fa-twitter"></span> Twitter
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{{ url('/auth/google') }}"
                                               class="btn btn-block btn-social btn-google">
                                                <span class="fa fa-google-plus"></span> Google+
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{{ url('/auth/github') }}"
                                               class="btn btn-block btn-social btn-github">
                                                <span class="fa fa-github"></span> Github
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
