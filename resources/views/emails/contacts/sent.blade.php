@component('mail::message')

{{ $contact->full_name }}
<br>
{{ $contact->email }}
<br>
{{ $contact->phone }}
<br>
{{ $contact->message }}

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
