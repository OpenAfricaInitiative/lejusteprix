@component('mail::message')
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
