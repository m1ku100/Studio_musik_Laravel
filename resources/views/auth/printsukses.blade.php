<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <title>SISTUM &mdash; Sistem Informasi Studio Musik</title>
</head>
<body onload="window.print()">
<div>
    <center><img style="width: 10%; length: 10%;" src="https://i.imgur.com/UHp7uVR.png"></center>
    <center><h2 class="tittle" style="color: #49c2f5">BHINNEKA MUSIC STUDIO</h2>
        <span style="color: #49c2f5">SISTUM &mdash; Sistem Informasi Studio Musik</span>
        <hr>
        <br>
    </center>
</div>

<table>
    <tr>
        <td>Order ID</td>
        <td>:</td>
        <td>  {{$order->id}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>:</td>

        <td>  {{$user->name}}</td>
    </tr>
    <tr>
        <td>Name Band</td>
        <td>:</td>
        @if($user->nama_band!==null)
            <td>{{$user->nama_band}}</td>
        @else
            <td>-</td>
        @endif
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
            <td>{{\Illuminate\Support\Carbon::createFromFormat('Y-m-d',$dt->awal)->format('D, j M y')}} 10:00-22:00
                WIB
            </td>
        </tr>
        <tr>
            <td>Total Cost</td>
            <td>&nbsp;:&nbsp;&nbsp;</td>
            <td>Rp {{number_format($dt->jenis_recorder->harga_recorder,2,',','.')}}</td>
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
            <td>Rp {{number_format($pembayaran->jumlah,2,',','.')}} ({{$order->status_book}})</td>
        </tr>
    @endif

</table>
</body>
</html>