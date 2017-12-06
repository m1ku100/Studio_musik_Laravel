@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>PAYMENT</strong> PROCESS</h1>
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
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 02"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step03">
                                <progress class="progress" value="100" max="100"
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
                <div class="col-lg-12">
                    <div class="w3-panel w3-card text-center">
                        <br>
                        <h4 style="color: #0C4487" id="demo"></h4> <h4>Silakan lakukan pembayaran sebelum waktu yang
                            telah
                            ditentukan, untuk DP minimal 50% dari nominal total. Mohon transfer sebesar
                            <strong>
                                <?php $rp = number_format($a['harga'], 2, ",", ".") ?>
                                Rp{{$rp}}
                            </strong> ke rekening berikut:</h4>
                        <br>
                        <img src="{{asset('img/btn.png')}}" style="width: 25%">
                        <p>No. rek: <strong>00061-01-61-002020-2</strong><br>a/n. <strong>Nur Lujeng
                                Kinanti</strong></p>

                        <hr>
                        <p>Setelah itu, silahkan klik tombol dibawah ini.</p>
                        <a href="{{url('/member/'.\Illuminate\Support\Facades\Auth::user()->id.'/history')}}"
                           title="Lakukan konfirmasi pembayaran"
                           data-toggle="tooltip" data-placement="bottom" type="submit"
                           class="btn btn-common2"><strong>PAYMENT CONFIRM <i
                                        class="fa fa-chevron-right"></i></strong></a>
                        <h5>&nbsp;</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        // Set the date we're counting down to
        var countDownDate = new Date("{{$a['date']['date']}}");
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
@endsection