<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="stylesheet" href="{{asset('combobox/css/style.css')}}">--}}
    <title>Document</title>

</head>
<body>
{{--<div id="combobox" aria-labelledBy="label" aria-describedby="error description" role="combobox" aria-autocomplete="none" tabindex="0" aria-owns="listbox">--}}
{{--Select a value ▼--}}
{{--</div>--}}
{{--<div role="listbox" id="listbox">--}}
{{--<div class="option" role="option" id="option1">Laptop</div>--}}
{{--<div class="option" role="option" id="option2">Desktop</div>--}}
{{--<div class="option" role="option" id="option3">Phone</div>--}}
{{--</div>--}}
{{--<button id="toggleError">Show error</button>--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>--}}
{{--<script src="{{asset('combobox/js/index.js')}}"></script>--}}
sekarang
<form method="post" class="form-horizontal" action="{{route('user.order-studio')}}">
    {{ csrf_field() }}
    <span>Studio : </span>

    @foreach($studio as $st)
        <input type="radio" value="{{$st->id}}" class="studiosel" name="studio_id">{{$st->nama_studio}}
        <a href="{{url('/order-studio/detail/'.\Illuminate\Support\Facades\Crypt::encryptString($st->id))}}" target="_blank">See Studio</a>
        <br>
    @endforeach
    <input type="hidden" name="date" value="{{$date}}">
    <label for="inputName" class="col-sm-3 control-label">Start</label>
    <select style="width: 200px" name="waktu_mulai" class="productcategory" id="prod_cat_id">
        <option value="0" disabled="true" selected="true">Select Studio First</option>

    </select>

    <span>End: </span>
    <select style="width: 200px" name="waktu_habis" class="productname">
        <option value="0" disabled="true" selected="true">Select Studio First</option>
    </select>

    <div class="form-group{{--{{ $errors->has('email') ? ' has-error' : '' }}--}} has-feedback">
        <label for="inputEmail" class="col-sm-3 control-label">Informasi Tambahan</label>

        <div class="col-sm-9">
            <input placeholder="tambah anu" type="text" class="form-control"
                   name="deskripsi">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
besok
<form method="post" class="form-horizontal" action="{{route('user.order-studio')}}">
    {{ csrf_field() }}
    <span>Studio : </span>
    @foreach($studio as $st)
        <input type="radio" value="{{$st->id}}" class="studiosel2" name="studio_id" >{{$st->nama_studio}}
        <a href="{{url('/order-studio/detail/'.\Illuminate\Support\Facades\Crypt::encryptString($st->id))}}" target="_blank">See Studio</a>
        <br>
    @endforeach
    <input type="hidden" name="date" value="{{$date2}}">
    <label for="inputName" class="col-sm-3 control-label">Start</label>
    <select style="width: 200px" name="waktu_mulai" class="productcategory2" id="prod_cat_id">
        <option value="0" disabled="true" selected="true">Select Studio Firsr</option>

    </select>
    <span>End: </span>
    <select style="width: 200px" name="waktu_habis" class="productname2">

        <option value="0" disabled="true" selected="true">Select Studio Firsr</option>
    </select>


    <div class="form-group{{--{{ $errors->has('email') ? ' has-error' : '' }}--}} has-feedback">
        <label for="inputEmail" class="col-sm-3 control-label">Informasi Tambahan</label>

        <div class="col-sm-9">
            <input placeholder="tambah anu (isi jika perlu)" type="text" class="form-control"
                   name="deskripsi">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

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
                    op += '<option value="0" selected disabled>pilih waktu</option>';
                    for (var i = 0; i < data.length; i++) {
                        if (data[i].status==0) {
                            op += '<option value="' + data[i].waktu + '" disabled>' + data[i].waktu + ' WIB</option>';
                        }
                        else {
                            op += '<option value="' + data[i].id_studio + '">' + data[i].waktu + ' WIB</option>';
                        }

                    }
                    op2 +='<option value="0" disabled="true" selected="true">Then Select Start</option>';

                    div.find('.productcategory').html(" ");
                    div.find('.productcategory').append(op);
                    div.find('.productname').append(op2);
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
                        if (data[i].status==0) {
                            op += '<option value="' + data[i].id_studio + '" disabled>' + data[i].waktu + ' WIB</option>';
                        }
                        else {
                            op += '<option value="' + data[i].id_studio + '">' + data[i].waktu + ' WIB</option>';
                        }

                    }
                    op2 +='<option value="0" disabled="true" selected="true">Then Select Start</option>';

                    div.find('.productcategory2').html(" ");
                    div.find('.productname2').html(" ");
                    div.find('.productcategory2').append(op);
                    div.find('.productname2').append(op2);
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

                    div.find('.productname').html(" ");
                    div.find('.productname').append(op);
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

                    div.find('.productname2').html(" ");
                    div.find('.productname2').append(op);
                },
                error: function () {
                    console.log('gagal');
                }
            });

        })
    })

</script>

</body>
</html>