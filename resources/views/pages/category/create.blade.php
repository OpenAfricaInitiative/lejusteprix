@extends('layouts.form')
@section('card')
     @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @component('components.card')
        @slot('title')
            @lang("Creation d'une categorie")
        @endslot
        <form method="POST" action="{{ route('categorie.store') }}">
            {{ csrf_field() }}
            @include('layouts.partials.form', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @component('components.button')
                @lang('Créer')
            @endcomponent
        </form>
    @endcomponent
@endsection