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
<style>
    .table-bordered {
        border: 1px solid #eceeef
    }

    .table-bordered td, .table-bordered th {
        border: 1px solid #eceeef
    }

    .table-bordered thead td, .table-bordered thead th {
        border-bottom-width: 2px
    }

    .table-bordered td, .table-bordered th {
        border: 1px solid #ddd !important
    }
</style>
<table id="example1" class="table table-bordered table-striped table-hover">
    <thead>
    <tr>
        <th>ID Order</th>
        <th>Customer</th>
        <th>Admin</th>
        <th>Booking Date</th>
        <th>Expired Date</th>
        <th>Status</th>
        <th>Due_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order as $row)
        <tr>
            <td>{{$row->id_order}}</td>
            <td>{{$row->user_id}}</td>
            <td>{{$row->pengurus_id}}</td>
            <td>{{$row->tgl_booking}}</td>
            <td>{{$row->tgl_exp}}</td>
            <td>{{$row->status_book}}</td>
            <td>{{$row->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>