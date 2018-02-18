@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Inscription')
        @endslot
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            @include('layouts.partials.form', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @include('layouts.partials.form', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])
            @include('layouts.partials.form', [
                'title' => __('Mot de passe'),
                'type' => 'password',
                'name' => 'password',
                'required' => true,
                ])
            @include('layouts.partials.form', [
                'title' => __('Confirmation du mot de passe'),
                'type' => 'password',
                'name' => 'password_confirmation',
                'required' => true,
                ])
            @component('components.button')
                @lang('Inscription')
            @endcomponent
        </form>
    @endcomponent
@endsection