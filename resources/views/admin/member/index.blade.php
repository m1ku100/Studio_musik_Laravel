@extends('layouts.admin.admin_mst_dashboard')
@section('sidenav')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">FROM USERS</li>
        <li class="treeview">
            <a href="{{route('admin.dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="active treeview menu-open">
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
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
                <small>Data Orders</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                {{--<li><a href="{{route('admin.table')}}">Tables</a></li>--}}
                <li class="active">Data Tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box box-success" id="studio">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-users"></i> &nbsp;All
                                Order List</h3>
                            <div class="box-tools pull-right">
                                <a target="_blank" href="{{url('admin/tablesmember/print')}}">
                                    <button type="button" class="btn btn-box-tool">
                                        <strong><i class="fa fa-print"></i> PRINT ALL</strong>
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
                                    <th>No.</th>
                                    <th>OrderID</th>
                                    <th>Payment Proof</th>
                                    <th>Name</th>
                                    <th>Studio</th>
                                    <th>Total Pay</th>
                                    <th>Payment Type</th>
                                    <th>Total Cost</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($konfirmasi as $row)
                                    <?php $or = \App\order::find($row->order_id)?>
                                    <?php $st = \App\order_studio::where('order_id', $row->order_id)->first();
                                    $rec = \App\order_recorder::where('order_id', $row->order_id)->first();
                                    $jenis = \App\jenis_recorder::find($rec['jenis_recorder_id']);
                                    $stde = \App\studio::find($st['studio_id'])
                                    ?>
                                    <tr><?php $kode = sprintf("%05d", $row->order_id); ?>
                                        <td>{{$no=$no+1}}</td>
                                        <td>{{$kode}}</td>
                                        <td>
                                            <a title="See {{$row->atas_nama}}" data-toggle="modal"
                                               data-target="#myCarousel{{$row->id}}">
                                                <img src="{{url($row->bukti_pembayaran)}}" width="50" height="50"
                                                     alt="">
                                            </a>
                                        </td>
                                        <td>{{$or->user->name}}</td>
                                        @if(is_null($jenis))
                                            <td>Practic <br> {{$stde['nama_studio']}}</td>
                                        @else
                                            <td>Recording <br>
                                                {{$jenis['nama_recorder']}}</td>
                                        @endif
                                        <td>Rp {{number_format($row->jumlah,2,',','.')}}</td>
                                        @if($row->metode=="Lunas")
                                            <td><span class="label label-success">{{$row->metode}}</span></td>
                                        @elseif($row->metode=="DP")
                                            <td><span class="label label-success">{{$row->metode}}</span></td>
                                        @else
                                            <td><span class="label label-danger">not verify</span></td>
                                        @endif

                                        @if(is_null($st))
                                            <td>Rp {{number_format($jenis['harga_recorder'],2,',','.')}}</td>
                                        @else
                                            <td>Rp {{number_format($st['harga'],2,',','.')}}</td>
                                        @endif
                                        @if($or['status_book']=='Lunas'||$or['status_book']=='DP')
                                            <td><span class="label label-success">{{$or['status_book']}}</span></td>
                                        @elseif ($or['status_book']=='Proses'||$or['status_book']=='Pembayaran')
                                            <td><span class="label label-info">{{$or['status_book']}}</span></td>
                                        @else
                                            <td><span class="label label-danger">{{$or['status_book']}}</span></td>
                                        @endif
                                        <td>{{$or['created_at']->diffForHumans()}}</td>
                                        @if($or['status_book']=='Lunas'||$or['status_book']=='DP')
                                            <td><span class="label label-success">Success</span></td>
                                        @elseif ($or['status_book']=='Proses')
                                            <td><a
                                                        href="{{url('admin/tablesmember/'.$or['id'].'/1')}}"
                                                        data-toggle="tooltip" title="Salah">
                                                    <button class="btn btn-danger">
                                                        S
                                                    </button>
                                                </a>
                                                <a
                                                        href="{{url('admin/tablesmember/'.$or['id'].'/2')}}"
                                                        data-toggle="tooltip" title="DP">
                                                    <button class="btn btn-info">
                                                        DP
                                                    </button>
                                                </a>
                                                <a
                                                        href="{{url('admin/tablesmember/'.$or['id'].'/3')}}"
                                                        data-toggle="tooltip" title="Lunas">
                                                    <button class="btn btn-success">
                                                        L
                                                    </button>
                                                </a>
                                            </td>
                                        @else
                                            <td><span class="label label-danger">Failed</span></td>
                                        @endif
                                    </tr>
                                @endforeach

                                @foreach($order as $st)
                                    <?php $kode = sprintf("%05d", $st->id);
                                    $konfirm = \App\konfirmasi_pembayaran::where('order_id', $st->id)->first();
                                    $stde = \App\order_studio::where('order_id', $st->id)->first();
                                    $stdet = \App\studio::find($stde['studio_id']);
                                    $recde = \App\order_recorder::where('order_id', $st->id)->first();
                                    $recdet = \App\jenis_recorder::find($recde['jenis_recorder_id']);
                                    ?>
                                    @if(is_null($konfirm))
                                        <tr>
                                            <td>{{$no=$no+1}}</td>
                                            <td>{{$kode}}</td>
                                            <td>Empty
                                            </td>
                                            <td>{{$st->user->name}}</td>
                                            @if(is_null($recdet))
                                                <td>practic <br>{{$stdet['nama_studio']}}</td>
                                            @else
                                                <td>Recording <br>{{$recdet['nama_recorder']}}</td>
                                            @endif
                                            <td>empty</td>
                                            @if($st->status_book=='Pembayaran')
                                                <td><span class="label label-info">waiting</span></td>
                                            @else
                                                <td><span class="label label-danger"> Failed</span></td>
                                            @endif
                                            @if(is_null($recdet))
                                                <td>Rp {{number_format($stde['harga'],2,',','.')}}</td>
                                            @else
                                                <td>Rp {{number_format($recdet['harga_recorder'],2,',','.')}}</td>
                                            @endif
                                            @if($st->status_book=='Pembayaran')
                                                <td><span class="label label-info">{{$st->status_book}}</span></td>
                                                <td>{{$st->created_at->diffforhumans()}}</td>
                                                <td><span class="label label-info">Waiting</span></td>
                                            @else
                                                <td><span class="label label-danger">{{$st->status_book}}</span></td>
                                                <td>{{$st->created_at->diffforhumans()}}</td>
                                                <td><span class="label label-danger">Failed</span></td>
                                            @endif


                                            {{--<td>{{$stde}}</td>--}}
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>OrderID</th>
                                    <th>Payment Proof</th>
                                    <th>Name</th>
                                    <th>Studio</th>
                                    <th>Total Pay</th>
                                    <th>Payment Type</th>
                                    <th>Total Cost</th>
                                    <th>Status</th>
                                    <th>Due at</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box box-warning" id="member">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-users"></i> &nbsp;All Member Joined</h3>
                            <div class="box-tools pull-right">
                                <a target="_blank" href="{{url('admin/tablesmember/print')}}">
                                    <button type="button" class="btn btn-box-tool">
                                        <strong><i class="fa fa-print"></i> PRINT ALL</strong>
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
                            <table id="example2" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>MemberID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>E-mail</th>
                                    <th>Joined_at</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $row)
                                    <tr><?php $kode = sprintf("%05d", $row->id); ?>
                                        <td>{{$kode}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->nama_band}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->updated_at->diffForHumans()}}</td>
                                        @if(is_null($row->deleted_at))
                                            <td><span class="label label-success">Active</span></td>
                                        @else
                                            <td><span class="label label-danger">Banned</span></td>
                                        @endif
                                        <td style="text-align: center">
                                            @if(is_null($row->deleted_at))
                                                <a onclick="return confirm('Are you sure wanna ban {{$row->name}} ?')"
                                                   href="{{url('admin/tablesmember/'.$row->id.'/banned')}}"
                                                   data-toggle="tooltip" title="BANNED">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-ban"></i>
                                                    </button>
                                                </a>
                                                <a>
                                                    <button class="btn btn-warning" disabled>
                                                        <i class="fa fa-refresh" data-toggle="tooltip"
                                                           title="RESTORE"></i>
                                                    </button>
                                                </a>
                                            @else
                                                <a>
                                                    <button class="btn btn-danger" disabled>
                                                        <i class="fa fa-ban" data-toggle="tooltip" title="BANNED"></i>
                                                    </button>
                                                </a>
                                                <a onclick="return confirm('Are you sure wanna restore {{$row->name}} ?')"
                                                   data-toggle="tooltip" title="RESTORE"
                                                   href="{{url('admin/tablesmember/'.$row->id.'/restore')}}">
                                                    <button class="btn btn-warning">
                                                        <i class="fa fa-refresh"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>MemberID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>E-mail</th>
                                    <th>Joined_at</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box box-danger" id="feedback">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-users"></i> &nbsp;All Feedback Received</h3>
                            <div class="box-tools pull-right">
                                <a target="_blank" href="{{url('admin/tablesmember/print')}}">
                                    <button type="button" class="btn btn-box-tool">
                                        <strong><i class="fa fa-print"></i> PRINT ALL</strong>
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
                            <table id="example3" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>MemberID</th>
                                    <th>Nama</th>
                                    <th>E-mail</th>
                                    <th>Message</th>
                                    <th>Due at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contact as $row)
                                    <tr><?php $kode = sprintf("%05d", $row->id); ?>
                                        <td>{{$kode}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->message}}</td>
                                        <td>{{$row->created_at->diffForHumans()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>MemberID</th>
                                    <th>Nama</th>
                                    <th>E-mail</th>
                                    <th>Message</th>
                                    <th>Due at</th>
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
    @foreach($konfirmasi as $st)
        <div id="myCarousel{{$st->id}}" class="modal fade bs-example-modal-lg" tabindex="-1"
             role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="carousel-example-generic{{$st->id}}" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item">
                                @if($st->bukti_pembayaran==null)
                                    <img class="img-responsive"
                                         src="{{asset('storage/1274237_300x300.jpg')}}"
                                         alt="{{$st->atas_nama}}">
                                @else
                                    <img class="img-responsive"
                                         src="{{asset($st->bukti_pembayaran)}}"
                                         alt="{{$st->atas_nama}}">
                                @endif
                                <div class="carousel-caption">
                                    {{$st->atas_nama}}
                                </div>
                            </div>
                        </div>

                        {{--<a class="left carousel-control" href="#carousel-example-generic{{$st->id}}" role="button"
                           data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"
                                                      aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic{{$st->id}}" role="button"
                           data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"
                                                      aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>--}}

                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
