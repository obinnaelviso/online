@component('mail::message')
<img src="https://citedum.com/assets/img/slider/bannernew1.jpg" height="300px"><br>
<span style="margin-top: 400px; font-size: 22px">@if($user === 'admin'){{  strtoupper('New Inside 2020 Registration') }} @else {{ strtoupper("You've successfully registered to Inside 2020. Below are your registration details:") }} @endif <br>

<span style="font-weight: 700">First Name:</span> {{ $firstname }} | <span style="font-weight: 700">Last Name:</span> {{ $lastname }}

<span style="font-weight: 700">Category:</span> {{ $catype }}

<span style="font-weight: 700">Identification Number: </span> {{ $idnum }}

<span style="font-weight: 700">Correspondence:</span> {{ $correspondence }}

<span style="font-weight: 700">Email Address:</span> {{ $email }}

<span style="font-weight: 700">Mailing Address: </span> {{ $mailaddress }}

<span style="font-weight: 700">Telephone: </span> {{ $telephone }}

<span style="font-weight: 700">Whatsapp Number: </span> {{ $whatsapp }}

<span style="font-weight: 700">Name of Institution/School/Industry: </span> {{ $schoolname }}

<span style="font-weight: 700">Names of Participants: </span> {{ $participants }}

<span style="font-weight: 700">Product Name: </span> {{ $productname }}

<span style="font-weight: 700">Number of Certificate(s): </span> {{ $cert }}

<span style="font-weight: 700">Number of Medal(s): </span> {{ $medal }}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}
{{-- 
Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent
