@component('mail::message')

#Your Leave Request is {{ $leaveType}}
Start : {{ $startdate }} To : {{ $enddate }} 


<p>{{ $reason }}</p>

I well {{ $status  }}
<p>{{ $note }}</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
