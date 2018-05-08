@component('mail::message')

To verify your account, click on the following button.<br>

@component('mail::button', ['url' => route( 'auth.verify', $token ), 'color' => 'green' ])
    Verify Your Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
