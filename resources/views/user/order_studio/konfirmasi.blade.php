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
<p>date : {{$date}}</p><br>
<p>Nama : {{$member->name}}</p><br>
@if($member->nama_band!==null)
<p>Nama Band : {{$member->nama_band}}</p><br>
    @else
    <p>Nama Band : kosong </p><br>
@endif
<p>studio : {{$studio->nama_studio}}</p><br>
<p>waktu : {{$waktu_habis}} - {{$waktu_mulai}} WIB</p><br>
<p>total_waktu : {{$total_waktu}} jam</p><br>
<p>harga : Rp {{$harga}}</p><br>
@if($deskripsi!=null)
    <p>deskripsi : {{$deskripsi}}</p><br>
@else
    <p>deskripsi : kosong</p><br>
@endif
<p>setelah melakukan konfirmasi waktu pembayaran 30 menit. jika melewati 30 menit transaksi dianggap batal</p>
<form method="post" class="form-horizontal" action="{{route('user.buyer-studio')}}">
    {{ csrf_field() }}
    <input type="hidden" value="{{$date}}" name="date">
    <input type="hidden" value="{{$date.' '.$waktu_mulai}}" name="waktu_mulai">
    <input type="hidden" value="{{$date.' '.$waktu_habis}}" name="waktu_habis">
    <input type="hidden" value="{{$studio_id}}" name="studio_id">
    <input type="hidden" value="{{$total_waktu}}" name="total_waktu">
    <input type="hidden" value="{{$harga}}" name="harga">
    @if($deskripsi!=null)
        <input type="hidden" value="{{$deskripsi}}" name="deskripsi">
    @else
        <input type="hidden" value="Kosong" name="deskripsi">
@endif
    <button type="submit" class="btn btn-primary">Konfirmasi</button>
</form>
<button onclick="window.location.href='{{url('/')}}'">Kembali</button>
</body>
</html>