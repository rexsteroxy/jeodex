@component('mail::message')
# Dear Valued {{$receiver_name}},

This is to inform you that your package with the tracking code: ----------
is enroute to {{$destination}}

@component('mail::button', ['url' => 'https://joedex.com'])
joedex.com
@endcomponent

@component('mail::panel', ['url' => ''])
...Swift Delivery Always
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
