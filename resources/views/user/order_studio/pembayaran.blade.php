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
<center><h2 style="color: #777;">Silakan Lakukan Pembayaran Sebelum Waktu Yang Telah
        Ditentukan, untuk DP minimal 50% dari nominal total. jumlah yang harus dibayar {{$order->harga}}</h2></center>


<button onclick="window.location.href='{{url('/member/'.\Illuminate\Support\Facades\Auth::user()->id.'/history')}}'" class="btn btn-primary">Lakukan Konfirmasi Pembayaran</button>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("{{$tanggal2}}");
    countDownDate.setDate(countDownDate.getDate() + 1);

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = /*days + " hari "+ hours + " jam "
            +*/ minutes + " menit " + seconds + " detik ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>

</html>