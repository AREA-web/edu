@component('mail::message')
# تيم compiler

لقد اضفنا محاضره جديده :-)

@component('mail::button', ['url' => ''])
الذهاب
@endcomponent

نشكرك,<br>
{{ config('app.name') }}
@endcomponent
