<h3 style="color: rgba(0,0,0,0.5)">SISTUM Account</h3>
<hr>
<h1 style="color: #2daad0">Verifying your e-mail address</h1>
<p><br>To finish this SISTUM Account settings, we just need to make sure this e-mail address belongs to you.
</p><br>
<style>
    .button {
        top: 100%;
        left: 100%;
        right: 100%;
        bottom: 100%;
        margin: -1px 0 0 -1px;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
        font-family: Helvetica;
        border-radius: 14px;
    }

    .d-windows {
        background: transparent;
        color: #27ccb4;
        border: 2px solid #27ccb4;
    }

    .d-windows:hover {
        color: #ffffff;
        background-color: #27ccb4;
    }

    .btn-lg,
    .btn-group-lg > .btn {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
    }

    .btn-group > .btn-lg + .dropdown-toggle {
        padding-right: 12px;
        padding-left: 12px;
    }

    .btn-lg .caret {
        border-width: 5px 5px 0;
        border-bottom-width: 0;
    }

    .dropup .btn-lg .caret {
        border-width: 0 5px 5px;
    }
</style>
<a style="text-decoration: none" class="btn button d-windows btn-lg"
   href="{{route('sendEmailDone',["email" => $user->email, "verifyToken"=>$user->verifyToken])}}">
    <strong>Activate Account ({{$user->email}})</strong>
</a><br><br>
<p>
    If you reject this request, <a href="{{route('dashboard')}}">click here</a> to cancel it.</p><br>
<p>Best Regards,<br>SISTUM Crew</p>