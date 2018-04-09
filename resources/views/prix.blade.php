@extends('layouts.base',['title'=>'Prix Officiel'])
@section('container')
<div class="container top">
    <div class="row">
      <h1 class="text-center col-md-12 color">Le juste prix des produits pour une transparence sur le maché ivoirien  </h1>
          <div class="col-md-8">
            <img src="images/aliment.jpg">   
          </div>
          <div class="eloigner col-md-offset-1 col-md-2">
              <h4 class="foruma"><a href="{{route('riz')}} ">Le Riz </a></h4>
              <h4 class="foruma"><a href="{{route('sucre')}}">Le Sucre</a></h4>
              <h4 class="foruma"><a href="{{route('ciment')}} ">Le ciment</a></h4>
              <h4 class="foruma"><a href="{{route('tomate')}} ">La tomate concentrée</a></h4>
              <h4 class="foruma"><a href="{{route('huile')}} ">L'Huile rafinée </a></h4>
              <h4 class="foruma"><a href="{{route('loyers')}} ">Loyers </a></h4>
              <h4 class="foruma"><a href="{{route('gaz')}} ">Bouteille de Gaz </a></h4>
          </div>
      </div> 
  </div><br>
@stop