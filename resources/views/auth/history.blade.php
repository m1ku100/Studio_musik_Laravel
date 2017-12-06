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
                                    <th>Expired Date</th>
                                    <th>Time</th>
                                    <th>Studio</th>
                                    <th>Status</th>
                                    <th>Due_at</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($order1 as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{\Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s',$row->tgl_exp)->toDayDateTimeString()}}</td>
                                        @foreach($studio as $st)
                                            @if($st->order_id==$row->id)
                                                @foreach($studiode as $dt)
                                                    @if($dt->id==$st->studio_id)
                                                        <td>{{\Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s',$st->waktu_mulai)->format('D, j/M/y H:i')}}
                                                            -<br>
                                                            {{\Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s',$st->waktu_habis)->format('H:i')}}
                                                            WIB
                                                        </td>
                                                        <td>Practic <br>{{$dt->nama_studio}}</td>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                        @foreach($recorder as $st)
                                            @if($st->order_id==$row->id)
                                                @foreach($recorderde as $dt)
                                                    @if($dt->id==$st->jenis_recorder_id)
                                                        <td>
                                                            {{\Illuminate\Support\Carbon::createFromFormat('Y-m-d',$st->awal)->format('D, j/M/y')}}
                                                            10:00-11:00 WIB
                                                        </td>
                                                        <td>Recording <br>{{$dt->nama_recorder}}</td>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                        <td>{{$row->status_book}}</td>
                                        <td>{{$row->created_at->diffForHumans()}}</td>
                                        @if($row->status_book=='Proses')
                                            <td>waiting</td>
                                        @elseif($row->status_book=='DP' || $row->status_book=='Lunas')
                                            <td>
                                                <a target="_blank"
                                                   href="{{url('/member/'.Auth::user()->id.'/'.$row->id.'/report')}}">Print</a>
                                            </td>
                                        @elseif($row->status_book=='Salah')
                                            <td>
                                                <a href="/konfirmasi/edit/{{\Illuminate\Support\Facades\Crypt::encrypt($row->id)}}">Edit</a>
                                            </td>
                                        @elseif($row->status_book=='Pembayaran')
                                            <td>
                                                <a href="/konfirmasi/{{\Illuminate\Support\Facades\Crypt::encrypt($row->id)}}">konfirmasi</a>
                                            </td>
                                        @else
                                            <td>expired</td>
                                        @endif

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="bg-primary">
                                    <th>ID Order</th>
                                    <th>Expired Date</th>
                                    <th>Time</th>
                                    <th>Studio</th>
                                    <th>Status</th>
                                    <th>Due_at</th>
                                    <th></th>
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
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
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
