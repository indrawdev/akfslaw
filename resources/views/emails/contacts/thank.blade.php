@component('mail::message')

Hi {{ $contact->full_name }}, pesan anda sudah dikirim.

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
