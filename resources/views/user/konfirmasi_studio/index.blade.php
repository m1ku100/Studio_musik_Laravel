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
<form action="{{route('user.prbayar-studio')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" value="{{$id1}}" name="id">
<input type="file"  name="bukti_pembayaran"><br>
<span>atas nama </span>
<input type="text" name="atas_nama"><br>
<span>metode</span>
<select name="metode" id="">
    <option value="Lunas">Lunas</option>
    <option value="DP">DP</option>
</select><br>
<span>Nominal Transfer</span>
<input type="number" name="jumlah"><br>
<span>deskripsi</span>
<input type="text" name="deskripsi"><br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>