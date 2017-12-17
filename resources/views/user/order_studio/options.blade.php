@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>INPUT</strong> DATA</h1>
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
                                <li role="presentation" class="active"><a href="team-member.html#now"
                                                                          aria-controls="now" role="tab"
                                                                          data-toggle="tab">Now</a></li>
                                <li role="presentation"><a href="team-member.html#tomorrow"
                                                           aria-controls="tomorrow"
                                                           role="tab" data-toggle="tab">Tomorrow</a></li>
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
                                                    <h3>Order for Today</h3>
                                                    <form method="post" class="form-horizontal"
                                                          action="{{route('user.order-studio')}}">
                                                        {{ csrf_field() }}

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Studio</label>
                                                            <div class="col-lg-6">
                                                                @foreach($studio as $st)
                                                                    <input type="radio" value="{{$st->id}}"
                                                                           class="studiosel" name="studio_id">&nbsp;
                                                                    {{$st->nama_studio}}
                                                                    <a title="See {{$st->nama_studio}}"
                                                                       data-toggle="modal"
                                                                       data-target="#myCarousel{{$st->id}}">
                                                                        (<i class="fa fa-picture-o"></i>)
                                                                    </a>

                                                                @endforeach
                                                            </div>
                                                        </div>

                                                        <input type="hidden" name="date" value="{{$date}}">

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Start</label>
                                                            <div class="col-lg-6">
                                                                <select name="waktu_mulai"
                                                                        class="form-control productcategory"
                                                                        id="prod_cat_id">
                                                                    <option value="0" disabled="true" selected="true">
                                                                        -- Choose --
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">End</label>
                                                            <div class="col-md-6">

                                                                <select name="waktu_habis"
                                                                        class="form-control productname">
                                                                    <option value="0" disabled="true" selected="true">
                                                                        -- Choose --
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group has-feedback">
                                                            <label for="deskripsi" class="col-md-4 control-label">Addition
                                                                Request</label>

                                                            <div class="col-md-6">
                                                                <textarea
                                                                        placeholder="Type addition request/information here"
                                                                        id="deskripsi" type="text" class="form-control"
                                                                        name="deskripsi"></textarea>
                                                                <span class="glyphicon glyphicon-question-sign form-control-feedback"></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-8 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Submit
                                                                </button>

                                                                <a class="btn btn-link" href="{{route('schedule')}}"
                                                                   target="_blank">
                                                                    Show Bhinneka's Schedule!
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- team-m-desc end -->
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="tomorrow">
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
                                                    <h3>Order for Tomorrow</h3>
                                                    <form method="post" class="form-horizontal"
                                                          action="{{route('user.order-studio')}}">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Studio</label>
                                                            <div class="col-lg-6">
                                                                @foreach($studio as $st)
                                                                    <input type="radio" value="{{$st->id}}"
                                                                           class="studiosel2"
                                                                           name="studio_id">&nbsp;{{$st->nama_studio}}
                                                                    <a title="See {{$st->nama_studio}}"
                                                                       data-toggle="modal"
                                                                       data-target="#myCarousel{{$st->id}}">
                                                                        (<i class="fa fa-picture-o"></i>)
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="date2" value="{{$date2}}">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Start</label>
                                                            <div class="col-lg-6">
                                                                <select name="waktu_mulai"
                                                                        class="form-control productcategory2"
                                                                        id="prod_cat_id">
                                                                    <option value="0" disabled="true" selected="true">
                                                                        -- Choose --
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">End</label>
                                                            <div class="col-md-6">

                                                                <select name="waktu_habis"
                                                                        class="form-control productname2">
                                                                    <option value="0" disabled="true" selected="true">
                                                                        -- Choose --
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group has-feedback">
                                                            <label for="deskripsi" class="col-md-4 control-label">Addition
                                                                Request</label>

                                                            <div class="col-md-6">
                                                                <textarea
                                                                        placeholder="Type addition request/information here"
                                                                        id="deskripsi" type="text" class="form-control"
                                                                        name="deskripsi"></textarea>
                                                                <span class="glyphicon glyphicon-question-sign form-control-feedback"></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-8 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Submit
                                                                </button>

                                                                <a class="btn btn-link" href="{{route('schedule')}}"
                                                                   target="_blank">
                                                                    Show Bhinneka's Schedule!
                                                                </a>
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
    @foreach($studio as $st)
        <div id="myCarousel{{$st->id}}" class="modal fade bs-example-modal-lg" tabindex="-1"
             role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div id="carousel-example-generic{{$st->id}}" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item">
                                @if($st->gambar_studio==null)
                                    <img class="img-responsive"
                                         src="{{asset('storage/1274237_300x300.jpg')}}"
                                         alt="{{$st->nama_studio}}">
                                @else
                                    <img class="img-responsive"
                                         src="{{asset($st->gambar_studio)}}"
                                         alt="{{$st->nama_studio}}">
                                @endif
                                <div class="carousel-caption">
                                    {{$st->nama_studio}}
                                </div>
                            </div>
                            <?php $comments = App\studio::find($st->id)->instruments ?>
                            @foreach($comments as $its)
                                <div class="item">
                                    <img class="img-responsive"
                                         src="{{asset($its->gambar)}}"
                                         alt="{{$its->id}}">
                                    <div class="carousel-caption">
                                        {{$its->nama_inst}}
                                    </div>
                                </div>
                            @endforeach
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.carousel-indicators:nth-child(1)').addClass('active');
            $('.item:nth-child(1)').addClass('active');

            $(document).on('change', '.studiosel', function () {
                console.log("hmm its change");

                var studio_id = $(this).val();
                console.log(studio_id);

                var div = $(this).parent();
                var op = " ";
                var op2 = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findstudio/')!!}',
                    data: {'id': studio_id},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        console.log(data.length);
                        if (!data.length) {
                            op += '<option value="0"  selected disabled>Sesi Habis</option>';
                        }
                        else {
                            op += '<option value="0" selected disabled>pilih waktu</option>';
                            for (var i = 0; i < data.length; i++) {
                                if (data[i].status == 0) {
                                    op += '<option value="' + data[i].waktu + '" disabled>' + data[i].waktu + ' WIB</option>';
                                }
                                else {
                                    op += '<option value="' + data[i].id_studio + '">' + data[i].waktu + ' WIB</option>';
                                }

                            }
                        }
                        op2 += '<option value="0" disabled="true" selected="true">Then Select Start</option>';

                        $('.productcategory').html(" ");
                        $('.productcategory').append(op);
                        $('.productname').append(op2);
                    },
                    error: function () {
                        console.log('gagal');
                    }
                });

            })

            $(document).on('change', '.studiosel2', function () {
//            console.log("hmm its change");

                var studio_id = $(this).val();
//            console.log(studio_id);

                var div = $(this).parent();
                var op = " ";
                var op2 = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findstudio2/')!!}',
                    data: {'id': studio_id},
                    success: function (data) {
//                    console.log('success');
//                    console.log(data);
//                    console.log(data.length);
                        op += '<option value="0" selected disabled>pilih waktu</option>';
                        for (var i = 0; i < data.length; i++) {
                            if (data[i].status == 0) {
                                op += '<option value="' + data[i].id_studio + '" disabled>' + data[i].waktu + ' WIB</option>';
                            }
                            else {
                                op += '<option value="' + data[i].id_studio + '">' + data[i].waktu + ' WIB</option>';
                            }

                        }
                        op2 += '<option value="0" disabled="true" selected="true">Then Select Start</option>';

                        $('.productcategory2').html(" ");
                        $('.productname2').html(" ");
                        $('.productcategory2').append(op);
                        $('.productname2').append(op2);
                    },
                    error: function () {
                        console.log('gagal');
                    }
                });

            })

            $(document).on('change', '.productcategory', function () {
                console.log("hmm its change");

                var waktu_mulai = $(this).val();
                console.log(waktu_mulai);

                var div = $(this).parent();
                var op = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findtime/')!!}',
                    data: {'id': waktu_mulai},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        console.log(data.length);
                        op += '<option value="0" selected disabled>pilih waktu</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].waktu + '">' + data[i].waktu + ' WIB</option>';
                        }

                        $('.productname').html(" ");
                        $('.productname').append(op);
                    },
                    error: function () {
                        console.log('gagal');
                    }
                });

            })
            $(document).on('change', '.productcategory2', function () {
                console.log("hmm its change");

                var waktu_mulai = $(this).val();
                console.log(waktu_mulai);

                var div = $(this).parent();
                var op = " ";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findtime2/')!!}',
                    data: {'id': waktu_mulai},
                    success: function (data) {
                        console.log('success');

                        console.log(data);

                        console.log(data.length);
                        op += '<option value="0" selected disabled>pilih waktu</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].waktu + '">' + data[i].waktu + ' WIB</option>';
                        }

                        $('.productname2').html(" ");
                        $('.productname2').append(op);
                    },
                    error: function () {
                        console.log('gagal');
                    }
                });

            })
        })

    </script>
@endsection