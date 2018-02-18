@extends('layouts.form')
@section('card')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @component('components.card')
        @slot('title')
            @lang('Modification de la categorie'. $categorie->name)
        @endslot
        <form method="POST" action="{{ route('categorie.update', $categorie->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @include('layouts.partials.form', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                'value'=> $categorie->name
                ])
            @component('components.button')
                @lang('Mettre à jour')
            @endcomponent
        </form>
    @endcomponent
@endsection