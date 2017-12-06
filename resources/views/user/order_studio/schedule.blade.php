<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('schedule/css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('schedule/css/style.css')}}"> <!-- Resource style -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">

    <title>SISTUM &mdash; Bhinneka's Schedule</title>
</head>
<body>
<div class="cd-schedule loading">
    <div class="timeline">
        <ul>
            @foreach($list as $ls)
                <li><span>{{\Carbon\Carbon::createFromFormat('H:i:s',$ls->waktu)->format('H:i')}}</span></li>
            @endforeach
        </ul>
    </div> <!-- .timeline -->

    <div class="events">
        <ul>
            <li class="events-group">
                <div class="top-info"><span>Monday</span></div>
                <ul>
                    @for($x=0;$x<$jumlah;$x++)
                        @if($now->toDateString()<=$data[$x]['tanggal'] &&
                        $now->copy()->addDays(2)->toDateString()>= $data[$x]['tanggal'])
                            @if($data[$x]['hari']== 'Mon')
                                <li class="single-event" data-start="{{$data[$x]['awal']}}"
                                    data-end="{{$data[$x]['habis']}}" data-content="event-abs-circuit"
                                    data-event="event-1">
                                    <a href="#{{$data[$x]['id']}}">
                                        <em class="event-name">{{$data2[$x]['name']}}</em>
                                    </a>

                                </li>
                            @endif
                        @endif
                    @endfor

                </ul>
            </li>
            <li class="events-group">
                <div class="top-info"><span>Tuesday</span></div>
                <ul>
                    @for($x=0;$x<$jumlah;$x++)
                        @if($now->toDateString()<=$data[$x]['tanggal'])
                            @if($data[$x]['hari']== 'Tue')
                                <li class="single-event" data-start="{{$data[$x]['awal']}}"
                                    data-end="{{$data[$x]['habis']}}" data-content="event-yoga-1" data-event="event-4">
                                    <a href="#0">
                                        <em class="event-name">{{$data2[$x]['name']}}</em>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endfor
                </ul>
            </li>

            <li class="events-group">
                <div class="top-info"><span>Wednesday</span></div>

                <ul>
                    @for($x=0;$x<$jumlah;$x++)
                        @if($now->toDateString()<=$data[$x]['tanggal'])
                            @if($data[$x]['hari']== 'Wed')
                                <li class="single-event" data-start="{{$data[$x]['awal']}}"
                                    data-end="{{$data[$x]['habis']}}"
                                    data-content="event-restorative-yoga" data-event="event-5">
                                    <a href="#0">
                                        <em class="event-name">{{$data2[$x]['name']}}</em>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endfor
                </ul>
            </li>

            <li class="events-group">
                <div class="top-info"><span>Thursday</span></div>

                <ul>
                    @for($x=0;$x<$jumlah;$x++)
                        @if($now->toDateString()<=$data[$x]['tanggal'])
                            @if($data[$x]['hari']== 'Thu')
                                <li class="single-event" data-start="{{$data[$x]['awal']}}"
                                    data-end="{{$data[$x]['habis']}}" data-content="event-rowing-workout"
                                    data-event="event-2">
                                    <a href="#0">
                                        <em class="event-name">{{$data2[$x]['name']}}</em>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endfor
                </ul>
            </li>

            <li class="events-group">
                <div class="top-info"><span>Friday</span></div>

                <ul>
                    @for($x=0;$x<$jumlah;$x++)
                        @if($now->toDateString()<=$data[$x]['tanggal'])
                            @if($data[$x]['hari']== 'Fri')
                                <li class="single-event" data-start="{{$data[$x]['awal']}}"
                                    data-end="{{$data[$x]['habis']}}" data-content="event-rowing-workout"
                                    data-event="event-2">
                                    <a href="#0">
                                        <em class="event-name">{{$data2[$x]['name']}}</em>
                                    </a>
                                </li>

                                <li class="single-event" data-start="{{$data[$x]['awal']}}"
                                    data-end="{{$data[$x]['habis']}}"
                                    data-content="event-yoga-1" data-event="event-3">
                                    <a href="#0">
                                        <em class="event-name">{{$data2[$x]['name']}}</em>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endfor

                </ul>
            </li>

        </ul>
    </div>

    @for($x=0;$x<$jumlah;$x++)

        <div id="{{$data[$x]['id']}}" class="event-modal">
            <header class="header">
                <div class="content">
                    <span class="event-date"></span>
                    <h3 class="event-name"></h3>
                </div>

                <div class="header-bg"></div>
            </header>

            <div class="body">
                <div class="event-info">
                    <p style="padding: 10%" align="justify">
                        lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum
                        dolor sit amet
                        lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum
                        dolor sit amet
                        lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum
                        dolor sit amet
                        lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum
                        dolor sit amet
                    </p>
                </div>
                <div class="body-bg"></div>
            </div>

            <a href="#{{$data[$x]['id']}}" class="close">Close</a>
        </div>
    @endfor
    <div class="cover-layer"></div>
</div> <!-- .cd-schedule -->
<script src="{{asset('schedule/js/modernizr.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
    if (!window.jQuery) document.write('<script src="schedule/js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="{{asset('schedule/js/main.js')}}"></script> <!-- Resource jQuery -->
</body>
</html>