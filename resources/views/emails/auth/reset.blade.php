@component('mail::message')
# Introduction

blood bank reset password
Hello {{ $user->name }}

<p>your reset code is {{ $user->pin_code }}</p>
{{-- @component('mail::button', ['url' => ''],['color'=>'danger'])
Reset
@endcomponent --}}
Thanks,<br>

{{ config('app.name') }}
@endcomponent
