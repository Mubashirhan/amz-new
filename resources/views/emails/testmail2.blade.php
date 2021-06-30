@component('mail::message')
![Some option text][logo]

[logo]: {{asset('style/images/logo-email.png')}} "Logo"
# Hi Admin,

We have got an email from the customer

<b>ASIN : </b> {{$data->asin}}<br>
<b>COMPANY : </b>  {{$data->name}}<br>
<b>Email : </b>  {{$data->email}}<br>
<b>Message : </b> {{$data->message}}<br>

Cheers,<br>
The AMZ Wordspy Team

@component('mail::button', ['url' => 'https://www.amzonestep.com/#calendly-call', 'color' => 'success'])
Get a Free Consultation
@endcomponent

@endcomponent


