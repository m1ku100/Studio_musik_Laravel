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
                                        <input id="name" type="text" class="form-control" name="name"
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
                                        <input id="nama_band" type="text" class="form-control" name="nama_band"
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
                                        <textarea id="alamat" type="text" class="form-control" name="alamat"
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
                                        <input id="no_telp" type="text" class="form-control" name="no_telp"
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
                                <div class="form-group{{ $errors->has('gambar_user') ? ' has-error' : '' }} has-feedback">
                                    <label for="gambar_user" class="col-md-4 control-label">Avatar</label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label class="input-group-btn">
                                                    <span class="btn btn-info">
                                                        Browse&hellip;<input name="gambar_user" type="file"
                                                                             style="display: none;" multiple>
                                                    </span>
                                            </label>
                                            <input type="text" id="gambar_user" class="form-control" readonly>
                                        </div>
                                        <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                                        @if ($errors->has('gambar_user'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gambar_user') }}</strong>
                                            </span>
                                        @endif
                                        {{-- @if(session('file'))
                                             <span class="help-block">
                                                 <strong>{{ session('file') }}</strong>
                                             </span>
                                         @endif--}}
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
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
                                        <input id="password" type="password" class="form-control" name="password"
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
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            Have an account? Click here!
                                        </a>
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