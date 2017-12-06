@extends('layouts.admin.admin_mst_dashboard')
@section('sidenav')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">FROM USERS</li>
        <li class="treeview">
            <a href="{{route('admin.dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('admin/tables#studio')}}"><i class="fa fa-music text-aqua"></i>Order Request</a>
                <li><a href="{{url('admin/tables#member')}}"><i class="fa fa-users text-yellow"></i> Member
                        Lists</a></li>
                </li>
                <li><a href="{{url('admin/tables#feedback')}}"><i class="fa fa-comments text-red"></i> Feedback
                        Received</a></li>
            </ul>
        </li>
        <li class="header">FOR USERS</li>
        <li class="active treeview menu-open">
            <a href="#">
                <i class="fa fa-building"></i> <span>Studios</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('studio.index') }}#studio"><i
                                class="fa fa-music text-aqua"></i> Practice Studio</a>
                </li>
                <li><a href="{{ route('studio.index') }}#form"><i
                                class="fa fa-video-camera text-teal"></i> Recorder Studio</a>
                </li>

            </ul>
        </li>
    </ul>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>Studio Contents</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                {{--<li><a href="{{route('admin.table')}}">Tables</a></li>--}}
                <li class="active">Studio Tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @if(session('sukses'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{session('sukses')}}
                </div>
            @elseif(session('gagal'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{session('gagal')}}
                </div>
            @elseif(session('berhasil'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{session('berhasil')}}
                </div>
            @elseif(session('ban'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    {{session('ban')}}
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12">
                    @if(!is_null($category))
                        <div class="box box-primary" id="form">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-plus-circle"></i> &nbsp;Edit Studio Content</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form method="post" class="form-horizontal"
                                      action="{{url('studio/'.$category->id.'/edit/update')}}"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{method_field('put')}}
                                    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">
                                            <img src="{{asset('storage'.$category->gambar)}}"
                                                 alt="{{$category->nama_inst}}" class="img-responsive">
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <label class="input-group-btn">
                                                    <span class="btn btn-info">
                                                        Browse&hellip;<input name="gambar" type="file"
                                                                             style="display: none;">
                                                    </span>
                                                </label>
                                                <input type="text" id="img_gallery" value="{{$category->gambar}}"
                                                       class="form-control" required readonly>
                                            </div>
                                            <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                                            @if ($errors->has('gambar'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('gambar') }}</strong>
                                            </span>
                                            @endif
                                            @if(session('file'))
                                                <span class="help-block">
                                                <strong>{{ session('file') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('nama_inst') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">Instrumet Name</label>
                                        <div class="col-sm-8">
                                            <input value="{{$category->nama_inst}}" class="form-control" type="text"
                                                   name="nama_inst" required>
                                            <span class="glyphicon glyphicon-usd form-control-feedback"></span>
                                            @if ($errors->has('nama_inst'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('nama_inst') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('jenis_alat_id') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">Type</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="jenis_alat_id" required>
                                                <option value="" disabled selected>-- Pilih Studio --</option>
                                                @foreach($jnal as $st)
                                                    <option value="{{$st->id}}" <?php if ($st->id == $category->jenis_alat_id) {
                                                        echo 'selected';
                                                    } ?>>{{$st->name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="glyphicon glyphicon-time form-control-feedback"></span>
                                            @if ($errors->has('studio_id'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('studio_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('studio_id') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">Studio</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="studio_id" required>
                                                <option value="" disabled selected>-- Pilih Studio --</option>
                                                @foreach($st111 as $st)
                                                    <option value="{{$st->id}}" <?php if ($st->id == $category->studio_id) echo 'selected';?>>{{$st->nama_studio}}</option>
                                                @endforeach
                                            </select>
                                            <span class="glyphicon glyphicon-time form-control-feedback"></span>
                                            @if ($errors->has('studio_id'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('studio_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-8">
                                            <button type="submit" class="btn btn-primary">UPDATE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    @else
                        <div class="box box-primary" id="form">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-plus-circle"></i> &nbsp;Add Studio Content</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form method="post" class="form-horizontal" action="{{route('submit.studio.content')}}"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">Gambar</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <label class="input-group-btn">
                                                    <span class="btn btn-info">
                                                        Browse&hellip;<input name="gambar" type="file"
                                                                             style="display: none;" required>
                                                    </span>
                                                </label>
                                                <input type="text" id="img_gallery"
                                                       class="form-control" required readonly>
                                            </div>
                                            <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                                            @if ($errors->has('gambar'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('gambar') }}</strong>
                                            </span>
                                            @endif
                                            @if(session('file'))
                                                <span class="help-block">
                                                <strong>{{ session('file') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('nama_inst') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">Instrumet Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_inst" required>
                                            <span class="glyphicon glyphicon-usd form-control-feedback"></span>
                                            @if ($errors->has('nama_inst'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('nama_inst') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('jenis_alat_id') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">Type</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="jenis_alat_id" required>
                                                <option value="" disabled selected>-- Pilih Studio --</option>
                                                @foreach($jnal as $st)
                                                    <option value="{{$st->id}}">{{$st->name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="glyphicon glyphicon-time form-control-feedback"></span>
                                            @if ($errors->has('studio_id'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('studio_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('studio_id') ? ' has-error' : '' }} has-feedback">
                                        <label for="inputName" class="col-sm-2 control-label">Studio</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="studio_id" required>
                                                <option value="" disabled selected>-- Pilih Studio --</option>
                                                @foreach($st111 as $st)
                                                    <option value="{{$st->id}}">{{$st->nama_studio}}</option>
                                                @endforeach
                                            </select>
                                            <span class="glyphicon glyphicon-time form-control-feedback"></span>
                                            @if ($errors->has('studio_id'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('studio_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-8">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    @endif

                    <div class="box box-info" id="studio">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-users"></i> &nbsp;All
                                Studio Content</h3>
                            <div class="box-tools pull-right">
                                <a href="#form">
                                    <button type="button" class="btn btn-box-tool">
                                        <strong><i class="fa fa-pencil"></i> ADD CONTENT</strong>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                {{session('status')}}
                            </div>
                    @endif
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Picture</th>
                                    <th>Studio</th>
                                    <th>Instrument/Type</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ins as $in)
                                    <tr>
                                        <td>{{$no=$no+1}}</td>
                                        <td width="25%"><img src="{{asset('storage'.$in->gambar)}}"
                                                             alt="{{$in->nama_inst}}" class="img-responsive"></td>
                                        <?php $st = \App\studio::find($in->studio_id);
                                        $jn = \App\jen_alat::find($in->jenis_alat_id);?>
                                        <td>{{$st->nama_studio}}</td>
                                        <td>{{$jn['name']}}</td>
                                        <td>{{$in->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{url('studio/'.$in->id.'/edit')}}#form">
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-edit" data-toggle="tooltip"
                                                       title="EDIT"></i>
                                                </button>
                                            </a>
                                            <a onclick="return confirm('Are you sure wanna delete {{$in->nama_inst}}  ?')"
                                               href="{{url('studio/'.$in->id.'/delete')}}">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash" data-toggle="tooltip"
                                                       title="DELETE"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Picture</th>
                                    <th>Studio</th>
                                    <th>Instrument/Type</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection