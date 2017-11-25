@extends('layouts.admin.admin_mst_dashboard')
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
                            <h3>{{$stud_order}}</h3>
                            @if($stud_order > 1)
                                <p>New Studio Orders</p>
                            @else
                                <p>New Studio Order</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$rec_order}}</h3>
                            @if($rec_order > 1)
                                <p>New Recorder Orders</p>
                            @else
                                <p>New Recorder Order</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$member}}</h3>
                            @if($member > 1)
                                <p>New Members</p>
                            @else
                                <p>New Member</p>
                            @endif
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$feedback}}</h3>
                            <p>New Feedback</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                            <i class="fa fa-globe"></i>
                            <h3 class="box-title">Latest Studio Orders</h3>

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
                                        <th>Customer Name</th>
                                        <th>Destination</th>
                                        <th>Departure</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1111</td>
                                        <td><span class="label label-info">Aaaa</span></td>
                                        <td>123123</td>
                                    </tr>
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
                            <i class="fa fa-bus"></i>
                            <h3 class="box-title">Latest Recorder Orders</h3>

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
                                        <th>Customer Name</th>
                                        <th>Destination</th>
                                        <th>Departure</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>13123</td>
                                        <td>adasdasd</td>
                                        <td><span class="label label-success">adssad <i
                                                        class="fa fa-long-arrow-right"></i> adasdsa</span>
                                        </td>
                                        <td>21321</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="{{url('admin/tables#Recorder')}}"
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
                            <i class="fa fa-globe"></i>
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
                                <li class="item">
                                    <div class="product-img">
                                        <img src="#" alt="Studio Image"/>
                                    </div>
                                    <div class="product-info">
                                        <a href="#"
                                           class="product-title">aaa
                                            &mdash; vvvv
                                            <span class="label label-info pull-right">Rp2222
                                                    / orang</span></a>
                                        <span class="product-description">
                                                asdsadasd &hellip;
                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="{{url('admin/Studiocontent#Studio')}}" class="uppercase">View All Studio</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <i class="fa fa-bus"></i>
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
                                <li class="item">
                                    <div class="product-img">
                                        <img src="/images/Recorder/bus/pahala_kencana1.JPG" alt="Studio Image"/>
                                    </div>
                                    <div class="product-info">
                                        <a href="#"
                                           class="product-title">asdasd
                                            <span class="label label-success pull-right">123
                                                    / orang</span></a>
                                        <span class="product-description">
                                               asdasd &mdash;
                                                Destination: asdasd <i
                                                    class="fa fa-long-arrow-right"></i> asdasd
                                            </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="{{url('admin/Recordercontent#Recorder')}}" class="uppercase">View All Recorder</a>
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
