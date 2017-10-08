@component('mail::message')

Hi, {{ $user->username }}
# Just one last step...

Activate your account by clicking the following button!

@component('mail::button', ['url' => $url])
Activate Account
@endcomponent

Thanks,<br>
{{ env('APP_NAME') }}
@endcomponent
