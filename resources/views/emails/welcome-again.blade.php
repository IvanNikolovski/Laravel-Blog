@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some quote
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
 