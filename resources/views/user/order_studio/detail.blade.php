<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


@if(!$studio->gambar_studio==null)
    <img class="profile-user-img img-responsive img-circle"
         src="{{asset($studio->gambar_studio)}}" height="100" alt="{{$studio->nama_studio}}">
@else
    <img class="profile-user-img img-responsive img-circle"
         src="{{asset('storage/1274237_300x300.jpg')}}" height="100" alt="User profile picture">
@endif
<br>
{{$studio->nama_studio}}<br>
harga per jam :{{$studio->harga_studio}}<br>
@foreach($inst as $row)

    @foreach($jen as $a)
        @if($a->id == $row->jenis_alat_id)
            @if(!$row->gambar==null)
                <img class="profile-user-img img-responsive img-circle" height="100"
                     src="{{asset($row->gambar)}}" alt="{{$a->name}}"><br>
            @else
                <img class="profile-user-img img-responsive img-circle"
                     src="{{asset('storage/1274237_300x300.jpg')}}" alt="{{$a->name}}"><br>
            @endif
            <br>
            type  : {{$row->nama_inst }}<br>
            jenis :{{$a->name}} &nbsp;<br>
        @endif
    @endforeach

@endforeach
{{ csrf_field() }}
<a href="{{url('order-studio/options/'.\Illuminate\Support\Facades\Crypt::encryptString($studio->id))}}">order now!!</a>
<a href="#" onclick="history.back();">back</a>

</body>
</html>