@extends('layouts.app')
@section('content')
    <main class="container-fluid">
        <h1>
            {{ $countOrphans }} {{ trans_choice(__('image orpheline|images orphelines'), $countOrphans) }}
            @if($countOrphans)
                <a class="btn btn-danger pull-right" href="{{ route('maintenance.destroy') }}" role="button">@lang('Supprimer')</a>
            @endif
        </h1>
        <div class="card-columns">
            @foreach($orphans as $orphan)
                <div class="card">
                    <img class="img-fluid" src="{{ url('thumb/' . $orphan) }}" alt="image">
                </div>
            @endforeach
        </div>
    </main>
@endsection
@include('layouts.partials.script')