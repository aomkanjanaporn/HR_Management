@component('mail::message')

#Leave Request is {{ $leaveType}}
Start : {{ $startdate }} To : {{ $enddate }} 


<p>{{ $reason }}</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
