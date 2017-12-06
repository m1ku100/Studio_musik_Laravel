@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>REPORT</strong> ORDER</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="progress-group">
                        <div class="wrapper">
                            <div class="step step01 complete">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 01"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step02">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 02"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step03">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 03"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step04 complete">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 04"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step05">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 05"></progress>
                                <div class="progress-circle"></div>
                            </div>
                        </div>
                        <div class="progress-labels">
                            <div class="label" style="color: black">Input</div>
                            <div class="label" style="color: black">Review</div>
                            <div class="label" style="color: black">Payment</div>
                            <div class="label" style="color: black">Process</div>
                            <div class="label" style="color: black">Report</div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="w3-container">
                        <div class="col-md-8">
                            <h2><i class="fa fa-ticket"></i> Order Detail</h2>
                            <div class="w3-panel w3-card"><br>
                                <div class="col-md-12">
                                    <table>
                                        <tr>
                                            <td>Order ID</td>
                                            <td>&nbsp;:&nbsp;&nbsp;</td>
                                            <td><strong>{{$order->id}}</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>&nbsp;:&nbsp;&nbsp;</td>
                                            <td><strong>{{$user->name}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Band Name</td>
                                            <td>&nbsp;:&nbsp;&nbsp;</td>
                                            <td>
                                                @if($user->nama_band!==null)
                                                    <strong>{{$user->name}}</strong>
                                                @else
                                                    <strong>&ndash;</strong>
                                                @endif
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        @if($status==1)
                                            <tr>
                                                <td>Studio</td>
                                                <td>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>Recorder {{$dt->jenis_recorder->nama_recorder}}</td>
                                            </tr>
                                            <tr>
                                                <td>Order Time</td>
                                                <td>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>{{\Illuminate\Support\Carbon::createFromFormat('Y-m-d',$dt->awal)->format('D, j M y')}}
                                                    10:00-22:00 WIB
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Cost</td>
                                                <td>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>
                                                    Rp {{number_format($dt->jenis_recorder->harga_recorder,2,',','.')}}</td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td>Studio</td>
                                                <td>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>Practice {{$dt->studio->nama_studio}}</td>
                                            </tr>
                                            <tr>
                                                <td>Order Time</td>
                                                <td>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>{{\Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s',$dt->waktu_mulai)->format('D, j M y H:i')}}
                                                    -
                                                    {{\Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s',$dt->waktu_habis)->format('H:i')}}
                                                    WIB
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cost</td>
                                                <td>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>Rp {{number_format($dt->harga,2,',','.')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Cost</td>
                                                <td>&nbsp;:&nbsp;&nbsp;</td>
                                                <td>Rp {{number_format($pembayaran->jumlah,2,',','.')}}
                                                    ({{$order->status_book}})
                                                </td>
                                            </tr>
                                        @endif
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2>&nbsp;</h2>
                            <div class="w3-panel w3-card-4"><br>
                                <div class="col-md-12 text-center">
                                    <h3>Print your Order Report</h3>
                                    <br>
                                    <a target="_blank"
                                       href="{{url('/member/'.Auth::user()->id.'/'.$order->id.'/print')}}">
                                        <button title="Klik tombol ini untuk mencetak bukti pemesanan anda."
                                                data-toggle="tooltip" data-placement="bottom" type="submit"
                                                class="btn btn-primary"><strong><i
                                                        class="fa fa-print"></i> PRINT</strong></button>
                                    </a>
                                    <br>
                                    <hr>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1>&nbsp;</h1>
                    <h1>&nbsp;</h1>
                    <h1>&nbsp;</h1>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection