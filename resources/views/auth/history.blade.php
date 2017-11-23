@extends('layouts.mst_dashboard_relog')

@section('content')
    <div class="service-area-4 fix" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>ORDER</strong> HISTORY</h1>
                        </div>
                        <p>lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="w3-container -align-center center-block">
                        <div class="w3-panel w3-card">
                            <div style="height: 25px; border-bottom: 1px solid rgba(0,0,0,0.1); text-align: center">
                                <span style="font-size: 28px; background-color: #FFFFFF; padding: 0 10px;">BHINNEKA MUSIC STUDIO</span>
                            </div>
                            <br>
                            <style>
                                #example1 th {
                                    text-align: center;
                                    vertical-align: middle;
                                }

                                #example1 td {
                                    text-align: center;
                                    vertical-align: middle;
                                }
                            </style>
                            <div class="text-right">
                                @if($count > 0)
                                    <a target="_blank" href="{{url('/member/'.Auth::user()->id.'/history/print')}}">
                                        <button data-toggle="tooltip" title="Print Order History"
                                                class="btn btn-info">
                                            <i class="fa fa-print"></i>
                                        </button>
                                    </a>
                                @else
                                    <a>
                                        <button onclick="return alert('There`s no any order history...')"
                                                data-toggle="tooltip"
                                                title="Print Order History"
                                                class="btn btn-info">
                                            <i class="fa fa-print"></i>
                                        </button>
                                    </a>
                                @endif
                            </div>
                            <br>
                            <table class="table table-responsive table-bordered table-hover" width="100%"
                                   id="example1" cellspacing="0">
                                <thead>
                                <tr class="bg-primary">
                                    <th>ID Order</th>
                                    <th>Customer</th>
                                    <th>Admin</th>
                                    <th>Booking Date</th>
                                    <th>Expired Date</th>
                                    <th>Status</th>
                                    <th>Due_at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $row)
                                    <tr>
                                        <td>{{$row->id_order}}</td>
                                        <td>{{$row->user_id}}</td>
                                        <td>{{$row->pengurus_id}}</td>
                                        <td>{{$row->tgl_booking}}</td>
                                        <td>{{$row->tgl_exp}}</td>
                                        <td>{{$row->status_book}}</td>
                                        <td>{{$row->updated_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="bg-primary">
                                    <th>ID Order</th>
                                    <th>Customer</th>
                                    <th>Admin</th>
                                    <th>Booking Date</th>
                                    <th>Expired Date</th>
                                    <th>Status</th>
                                    <th>Due_at</th>
                                </tr>
                                </tfoot>
                            </table>
                            <script>
                                $(document).ready(function () {
                                    $('[data-toggle="tooltip"]').tooltip();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $("#example2").DataTable();
            /*$("#example1").DataTable({
             "paging": false,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": false,
             "autoWidth": false
             });*/
        });
    </script>
@endsection
