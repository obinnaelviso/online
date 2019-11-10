@component('mail::message')
<span style="border-style: dotted; border-width: 2px; border-color: red; padding: 5px">New booking notification from <span style="color: darkblue; font-weight: 700; font-size: 18px">{{ $booking_type }}</span> page</span> <br><br>

<span style="font-weight: 700">First Name:</span> {{ $firstname }} | <span style="font-weight: 700">Last Name:</span> {{ $lastname }}

<span style="font-weight: 700">User:</span> {{ strtoupper(str_replace('_', ' ',$user_type)) }}

<span style="font-weight: 700">Identification Number: </span> {{ $idnum }}

<span style="font-weight: 700">Email Address:</span> {{ $email }}

<span style="font-weight: 700">Number of hours: </span> {{ $hours }}

<span style="font-weight: 700">Date and Time: </span> {{ $date_time }}

<span style="font-weight: 700">Purpose of booking: </span> {{ $purpose }}

<span style="font-weight: 700">Number of Users: </span> {{ $users_count }}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}
{{-- 
Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent
