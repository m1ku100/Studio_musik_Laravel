@extends('layouts.mst_dashboard_relog')

@section('content')
    <div class="service-area-4 fix" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>ACCOUNT</strong> SETTINGS</h1>
                        </div>
                        <p>Member Since: {{$user->created_at}}| Last Updated: {{$user->updated_at}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="w3-panel w3-card">
                        <div class="panel-body wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            @if(session('ok'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                    </button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    {{session('ok')}}
                                </div>
                            @endif
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ url('/member/'.$user->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                    <label for="name" class="col-md-4 control-label">Full Name</label>
                                    <div class="col-md-6">
                                        <input placeholder="Full name" id="name" type="text" class="form-control"
                                               name="name"
                                               value="{{ $user->name }}" required autofocus>
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
                                               value="{{ $user->nama_band }}" required autofocus>
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
                                                  required autofocus>{{ $user->alamat }}</textarea>
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
                                               value="{{ $user->no_telp }}" onkeypress="return hanyaAngka(event, false)"
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
                                    <label for="gambar_user" class="col-md-4 control-label">
                                        <img title="avatar" src="{{asset('storage/member/'.$user->gambar_user)}}"
                                             style="width: 55%" alt="Avatar">
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label class="input-group-btn">
                                                    <span class="btn btn-info">
                                                        Browse&hellip;<input name="gambar_user" type="file"
                                                                             style="display: none;" multiple>
                                                    </span>
                                            </label>
                                            <input type="text" value="{{ $user->gambar_user }}" id="gambar_user"
                                                   class="form-control" readonly>
                                        </div>
                                        <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                                        @if ($errors->has('gambar_user'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gambar_user') }}</strong>
                                            </span>
                                        @endif
                                        @if(session('ava'))
                                            <span class="help-block">
                                                <strong>{{ session('ava') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input placeholder="E-mail" id="email" type="email" class="form-control"
                                               name="email"
                                               value="{{ $user->email }}" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ session('password') ? ' has-error' : '' }} has-feedback">
                                    <label for="password" class="col-md-4 control-label">Current Password</label>
                                    <div class="col-md-6">
                                        <input placeholder="Current password" id="password" type="password"
                                               class="form-control" name="password"
                                               required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if (session('status'))
                                            <span class="help-block">
                                                <strong>{{ session('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }} has-feedback">
                                    <label for="password" class="col-md-4 control-label">New Password</label>

                                    <div class="col-md-6">
                                        <input placeholder="New password" id="password" type="password"
                                               class="form-control" name="new_password"
                                               required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('new_password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm
                                        Password</label>

                                    <div class="col-md-6">
                                        <input placeholder="Retype password" id="password-confirm" type="password"
                                               class="form-control"
                                               name="password_confirmation" required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Save
                                        </button>
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
