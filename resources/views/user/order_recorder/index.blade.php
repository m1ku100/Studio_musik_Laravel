@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>INPUT</strong> DATA</h1>
                            <p>ATTENTION!! You're allowed to order once in a week.</p>
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
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 02"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step03">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 03"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step04 complete">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 04"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step05">
                                <progress class="progress" value="0" max="100"
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
                <div class="col-lg-10 col-md-10 col-sm-12 col-lg-offset-1">
                    <div class="team-member-tab">
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="team-member.html#now" aria-controls="now" role="tab" data-toggle="tab">
                                        <strong style="text-transform: uppercase">{{$jenis->nama_recorder}}</strong>
                                    </a>
                                </li>
                            </ul>

                            <div class="row">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="now">
                                        <div class="team-m-content">
                                            <!-- team-m-img start -->
                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                <div class="team-m-img">
                                                    <img src="{{asset('img/team/team-member/1.jpg')}}" alt=""/>
                                                </div>
                                            </div>
                                            <!-- team-m-img end -->
                                            <!-- team-m-desc start -->
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <div class="team-m-desc">
                                                    <h3>Recorder Studio Order</h3>
                                                    <form method="post" class="form-horizontal"
                                                          action="{{route('user.become-recorder')}}">
                                                        {{ csrf_field() }}

                                                        <input type="hidden" name="jenis_recorder_id"
                                                               value="{{$idsssss}}">
                                                        <div class="form-group has-feedback">
                                                            <label class="col-md-4 control-label">Recorder
                                                                Package</label>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text"
                                                                       value="{{$jenis->nama_recorder}}" disabled>
                                                                <span class="glyphicon glyphicon-music form-control-feedback"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label class="col-lg-4 control-label">Order Date</label>
                                                            <div class="col-lg-6">
                                                                <input class="form-control" type="text" id="calender"
                                                                       name="awal">
                                                                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-8 col-lg-offset-4">
                                                                <button type="submit" class="btn btn-primary">Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- team-m-desc end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            var holidays = [@foreach($date as $dt)
                "{{$dt->waktu}}",
                @endforeach];


            $("#calender").datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: new Date({{$now->year}},{{$now->month-1}},{{$now->day+1}}),
                maxDate: new Date({{$now->year}},{{$now->month+1}},{{$now->day}}),
                numberOfMonths: 2,
                closeOnTimeSelect: true,
                beforeShowDay: function (date) {
                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                    return [holidays.indexOf(string) == -1];
                }

            });
        });
    </script>
@endsection
