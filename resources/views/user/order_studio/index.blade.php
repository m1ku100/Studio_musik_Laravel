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
@foreach($studio as $row)
    <tr>
        <td>{{$row->nama_studio}}</td>
        <td>{{$row->harga_studio}}</td>
@if(!$row->gambar_studio==null)
        <img class="profile-user-img img-responsive img-circle"
             src="{{asset($row->gambar_studio)}}" alt="User profile picture">
    @else
            <img class="profile-user-img img-responsive img-circle"
                 src="{{asset('storage/1274237_300x300.jpg')}}" alt="User profile picture">
        @endif
        <td><a href="{{url('order-studio/detail/'.\Illuminate\Support\Facades\Crypt::encryptString($row->id))}}">detail!!</a></td>
    </tr>
    <br>
@endforeach

</body>
</html>
