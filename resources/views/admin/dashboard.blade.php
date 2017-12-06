@extends('layouts.admin.admin_mst_dashboard')
@section('sidenav')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">FROM USERS</li>
        <li class="active treeview menu-open">
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
        <li class="treeview">
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$countst=count($dt_studio)}}</h3>
                            @if($countst > 1)
                                <p>New Practice Studio Orders</p>
                            @else
                                <p>New Practice Studio Order</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="ion ion-music-note"></i>
                        </div>
                        <a href="{{url('admin/tables#studio')}}" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$countrec=count($dt_recorder)}}</h3>
                            @if($countrec > 1)
                                <p>New Recorder Studio Orders</p>
                            @else
                                <p>New Recorder Studio Order</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="ion ion-videocamera"></i>
                        </div>
                        <a href="{{url('admin/tables#studio')}}" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$countus=count($dt_user)}}</h3>
                            @if($countus > 1)
                                <p>New Members</p>
                            @else
                                <p>New Member</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{url('admin/tables#member')}}" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{count($dt_feedback)}}</h3>
                            <p>New Feedback</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-chatbubble-working"></i>
                        </div>
                        <a href="{{url('admin/tables#feedback')}}" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <i class="fa fa-music"></i>
                            <h3 class="box-title">Latest Practice Studio Orders</h3>

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
                            <div class="table-responsive">
                                <table class="table no-margin table-hover">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Studio</th>
                                        <th>Customer Name</th>
                                        <th>Time Order</th>
                                        <th>Due_at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($lt_studio->isEmpty())
                                        <tr>
                                            <td colspan="5" align="center"> Data empty</td>
                                        </tr>
                                    @endif
                                    @foreach($lt_studio as $lts)
                                        <tr>
                                            <td>{{$lts->order_id}}</td>
                                            <?php $comments = App\order::find($lts->order_id) ?>
                                            <?php $comments2 = App\User::find($comments->user_id) ?>
                                            <td><span class="label label-info">{{$lts->studio->nama_studio}}
                                                </span></td>
                                            <td>{{$comments2->name}}</td>
                                            <td>
                                                {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$lts->waktu_mulai)->format('D, j M Y')}}
                                                <br>
                                                {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$lts->waktu_mulai)->format('H:i')}}
                                                - {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$lts->waktu_habis)->format('H:i')}}
                                                WIB
                                            </td>
                                            <td>{{$lts->created_at->diffForHumans()}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="{{url('admin/tables#Studio')}}" class="btn btn-sm btn-info btn-flat pull-left">View
                                All
                                Studio Orders</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <i class="fa fa-video-camera"></i>
                            <h3 class="box-title">Latest Recorder Studio Orders</h3>

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
                            <div class="table-responsive">
                                <table class="table no-margin table-hover">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Paket</th>
                                        <th>Customer Name</th>
                                        <th>Time Order</th>
                                        <th>Due_at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($lt_recorder->isEmpty())
                                        <tr>
                                            <td colspan="5" align="center"> Data empty</td>
                                        </tr>
                                    @endif
                                    @foreach($lt_recorder as $lts)
                                        <tr>
                                            <td>{{$lts->order_id}}</td>
                                            <?php $comments = App\order::find($lts->order_id) ?>
                                            <?php $comments2 = App\User::find($comments->user_id) ?>
                                            <td><span class="label label-info">{{App\order_recorder::find($lts -> id)->jenis_recorder->nama_recorder}}
                                                </span></td>
                                            <td>{{$comments2->name}}</td>
                                            <td>
                                                {{\Carbon\Carbon::createFromFormat('Y-m-d',$lts->awal)->format('D, j M Y')}}
                                                <br>
                                                10:00 - 22:00WIB
                                            </td>
                                            <td>{{$lts->created_at->diffForHumans()}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="{{url('admin/tables#studio')}}"
                               class="btn btn-sm btn-success btn-flat pull-right">View
                                All
                                Recorder Orders</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <i class="fa fa-music"></i>
                            <h3 class="box-title">Recently Added Studio Contents</h3>

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
                            <ul class="products-list product-list-in-box">
                                @foreach($lt_sstudio as $inst)
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{asset($inst->gambar_studio)}}" alt="{{$inst->nama_studio}}"/>
                                    </div>
                                    <div class="product-info">
                                        <a href="#"
                                           class="product-title">{{$inst->nama_studio}}

                                            <span class="label label-info pull-right">Rp {{number_format($inst->harga_studio,2,',','.')}}
                                                / Hours</span></a>
                                        <span class="product-description">
                                                asdsadasd &hellip;
                                            </span>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="{{ route('studio.index') }}" class="uppercase">View All Studio</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <i class="fa fa-video-camera"></i>
                            <h3 class="box-title">Recently Added Recorder Contents</h3>

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
                            <ul class="products-list product-list-in-box">
                                @foreach($lt_jenis_recorder as $rec)
                                <li class="item">
                                    <div class="product-img">
                                        <img src="#" alt="{{$rec->nama_recorder}}"/>
                                    </div>
                                    <div class="product-info">
                                        <a href="#"
                                           class="product-title">{{$rec->nama_recorder}}
                                            <span class="label label-success pull-right">{{$rec->harga}}
                                                / {{$rec->batas_hari}}</span></a>
                                        <span class="product-description">
                                               asdasd &mdash;
                                                Destination: asdasd <i
                                                    class="fa fa-long-arrow-right"></i> asdasd
                                            </span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="{{ route('studio.index') }}" class="uppercase">View All Recorder</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
