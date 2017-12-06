<!doctype html>
<html lang="en">
<head>
    <title>SISTUM &mdash; Sistem Informasi Studio Musik</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('jquery-ui-1.12.1/jquery-ui.css/')}}">
    <script src="{{ asset('jquery-ui-1.12.1/external/jquery/jquery.js') }}"></script>
    <script src="{{ asset('jquery-ui-1.12.1/jquery-ui.js') }}"></script>
    <script src="{{ asset('jquery-ui-1.12.1/datepicker-id.js') }}"></script>

    <style>
        .markholiday .ui-state-default {
            color: blue;
        }

        #daftar select {
            height: 35px;
        }

        .btn-common2 {
            color: #ffffff;
            border: 2px solid #000000;
            background-color: #000000;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-common2:hover {
            color: #000000;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #000000;
            transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }

        #form_xpro .btn {
            margin: 0;
        }

        .progress {
            display: block;
            width: 100%;
            height: 12px;
            position: relative;
            z-index: 5;
            padding-right: 8px;
            padding-top: 2px;
        }

        @media all and (min--moz-device-pixel-ratio: 0) and (min-resolution: 30dpcm) {
            .progress {
                height: 10px;
            }
        }

        .progress[value] {
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0;
        }

        .progress[value]::-ms-fill {
            background-color: #0074d9;
            border: 0;
        }

        .progress[value]::-moz-progress-bar {
            background-color: #0074d9;
            margin-right: 8px;
        }

        .progress[value]::-webkit-progress-inner-element {
            background-color: #eee;
        }

        .progress[value]::-webkit-progress-value {
            background-color: #0074d9;
        }

        .progress[value]::-webkit-progress-bar {
            background-color: #eee;
        }

        .progress-circle {
            width: 24px;
            height: 24px;
            position: absolute;
            right: 3px;
            top: -5px;
            z-index: 5;
            border-radius: 50%;
        }

        .progress-circle:before {
            content: "";
            width: 6px;
            height: 6px;
            background: white;
            border-radius: 50%;
            display: block;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
        }

        .progress-group {
            margin-top: 36px;
        }

        @media (max-width: 991px) {
            .progress-group {
                margin-left: -18px;
                margin-right: -18px;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                padding: 18px;
            }
        }

        @media (max-width: 768px) {
            .progress-group {
                padding: 18px 18px 0;
                margin-bottom: 12px;
            }
        }

        .progress-group .title {
            margin-bottom: 18px;
        }

        .progress-group .wrapper {
            background: white;
            border: 1px solid #eee;
            border-radius: 12px;
            height: 14px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.3));
            filter: drop-shadow(0 0 1px rgba(0, 0, 0, 0.3));
        }

        .progress-group .step {
            width: 20%;
            position: relative;
        }

        .progress-group .step:after {
            content: "";
            height: 30px;
            width: 30px;
            background: white;
            border-radius: 50%;
            display: block;
            position: absolute;
            right: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .progress-group .step:first-of-type .progress {
            padding-left: 4px;
        }

        .progress-group .step:first-of-type .progress[value]::-moz-progress-bar {
            border-radius: 5px 0 0 5px;
        }

        .progress-group .step:first-of-type .progress[value]::-webkit-progress-value {
            border-radius: 5px 0 0 5px;
        }

        .progress-group .step:not(:first-of-type) .progress[value]::-moz-progress-bar {
            border-radius: 0;
        }

        .progress-group .step:not(:first-of-type) .progress[value]::-webkit-progress-value {
            border-radius: 0;
        }

        .progress-group .step .progress[value] + .progress-circle {
            background: #eee;
        }

        .progress-group .step.step01 .progress[value]::-moz-progress-bar {
            background-color: #23607d;
        }

        .progress-group .step.step01 .progress[value]::-webkit-progress-value {
            background-color: #23607d;
        }

        .progress-group .step.step01 .progress[value="100"] + .progress-circle {
            background-color: #23607d;
        }

        .progress-group .step.step02 .progress[value]::-moz-progress-bar {
            background-color: #2686a4;
        }

        .progress-group .step.step02 .progress[value]::-webkit-progress-value {
            background-color: #2686a4;
        }

        .progress-group .step.step02 .progress[value="100"] + .progress-circle {
            background-color: #2686a4;
        }

        .progress-group .step.step03 .progress[value]::-moz-progress-bar {
            background-color: #30a6cd;
        }

        .progress-group .step.step03 .progress[value]::-webkit-progress-value {
            background-color: #30a6cd;
        }

        .progress-group .step.step03 .progress[value="100"] + .progress-circle {
            background-color: #30a6cd;
        }

        .progress-group .step.step04 .progress[value]::-moz-progress-bar {
            background-color: #26c4c3;
        }

        .progress-group .step.step04 .progress[value]::-webkit-progress-value {
            background-color: #26c4c3;
        }

        .progress-group .step.step04 .progress[value="100"] + .progress-circle {
            background-color: #26c4c3;
        }

        .progress-group .step.step05 .progress[value]::-moz-progress-bar {
            background-color: #10C895;
        }

        .progress-group .step.step05 .progress[value]::-webkit-progress-value {
            background-color: #10C895;
        }

        .progress-group .step.step05 .progress[value="100"] + .progress-circle {
            background-color: #10C895;
        }

        .progress-labels {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .progress-labels .label {
            text-align: center;
            text-transform: uppercase;
            margin: 12px 0;
            width: 20%;
            font-size: 11px;
            padding-right: 24px;
            font-weight: 600;
            opacity: 0.7;
        }
    </style>
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
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-md-12 text-center" style="padding: 3%">
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
    <div class="col-lg-8 col-md-8 col-sm-12 col-lg-offset-2">
        <div class="w3-panel w3-card">
            <div class="col-lg-8 col-lg-offset-2" style="padding-top: 5%; padding-bottom: 5%">
                <form method="post" class="form-horizontal" action="{{route('user.become-recorder')}}">
                    {{ csrf_field() }}

                    <input type="hidden" name="jenis_recorder_id" value="{{$idsssss}}">
                    <div class="form-group has-feedback">
                        <label class="col-md-4 control-label">Recorder Package</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" value="{{$jenis->nama_recorder}}" disabled>
                            <span class="glyphicon glyphicon-music form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="col-lg-4 control-label">Order Date</label>
                        <div class="col-lg-6">
                            <input class="form-control" type="text" id="calender" name="awal">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8 col-lg-offset-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('dashboard')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>