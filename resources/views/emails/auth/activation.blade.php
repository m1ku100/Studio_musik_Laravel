@component('mail::message')
    # Activation Account

    To finish this SSW Account settings, we just need to make sure
    <br>this e-mail address: {{ $user->email }} belongs to you.

    @component('mail::button', ['url' => route('auth.activate',['verifyToken' => $user->verifyToken, 'email' => $user->email])])
        ACTIVATE
    @endcomponent

    Best Regards,<br>
    {{ config('app.name') }} Staff
@endcomponent
