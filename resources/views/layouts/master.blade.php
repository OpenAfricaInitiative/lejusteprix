@extends('layouts.base',['title'=>"Prix Officiels"])

@section('container')
<div class="container top">
    
    <div class="col-md-12">
        @yield('title')
    </div>
    <div class="row ">
          <div class="col-md-9">
             @yield('contenu')
          </div>
          <div class="col-md-3">
              <h4 class="foruma"><a href="{{route('riz')}} ">Riz </a></h4>
              <h4 class="foruma"><a href="{{route('sucre')}}">Sucre</a></h4>
              <h4 class="foruma"><a href="{{route('ciment')}} ">Ciment</a></h4>
              <h4 class="foruma"><a href="{{route('tomate')}} ">Tomate concentrée</a></h4>
              <h4 class="foruma"><a href="{{route('huile')}} ">Huile rafinée </a></h4>
              <h4 class="foruma"><a href="{{route('loyers')}} ">Loyers </a></h4>
              <h4 class="foruma"><a href="{{route('gaz')}} ">Bouteille de Gaz </a></h4>
              <h4 class="foruma"><a href="{{route('administratif')}} ">Documents Administratifs </a></h4>
              <h4 class="foruma"><a href="{{route('sanction')}} ">Sanctions routières </a></h4>
          </div>
      </div> 
  </div><br>
  @stop

