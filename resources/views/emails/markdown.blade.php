@component('mail::message')
# Hi.. {{ $data->name }}

The body of your message.

@component('mail::table')
| Information 	| Data 					|
|:-------------:|:---------------------:|
| Name 			| {{ $data->name }} 	|
| Email 		| {{ $data->email }} 	|
| Mobile Number | {{ $data->mobile }}	|
@endcomponent

@component('mail::button', ['url' => route('home')])
Restro
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
