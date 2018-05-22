@component('mail::message')
<div>
	<img src="{{ asset('/images/dev.png') }}">
</div>
<hr style="border-bottom: 5px solid #257525">

# Formualire de Contact

Ce message vient du formulaire du site {{ config('app.name') }}
<hr>
<h2>Nom:{{$msg->name}} </h2>
<p>Email:{{$msg->email}} </p>
@component('mail::panel')
<p>Message:{{$msg->message}} </p>
@endcomponent

@component('mail::button', ['url' => route('home'),'color'=>"red"])
Retour à l'Acceuil
@endcomponent

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
