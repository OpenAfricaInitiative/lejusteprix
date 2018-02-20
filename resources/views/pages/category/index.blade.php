@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Gestion des catégories')
        @endslot
        
        <table class="table table-dark">
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>                            
                            <a type="button" href="{{ route('categorie.destroy', $category->id) }}"  class="btn btn-danger btn-sm pull-right" data-toggle="tooltip" title="@lang('Supprimer la catégorie') {{ $category->name }}"><i class="fas fa-trash fa-lg"></i></a>
                            <a type="button" href="{{ route('categorie.edit', $category->id) }}" class="btn btn-warning btn-sm pull-right mr-2" data-toggle="tooltip" title="@lang('Modifier la catégorie') {{ $category->name }}"><i class="fas fa-edit fa-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endcomponent  
              
@endsection
@include('layouts.partials.script')
