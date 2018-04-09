@extends('layouts.base',['title'=>$title])
@section('container')
<div class="container top">
    <div class="row">
        <h3><a href="{{route('home')}} "><i class="fa fa-home"></i> Accueil</a>/{{$title}}</h3>
         <h4 class="font page-header">{{$title}}</h4>

          <div class="col-md-9">
           
            <div class="panel panel-success table-responsive ">
              <table class="table table-condensed table-bordered text-center" >
                <thead>
                  <tr>
                    <th>Designation</th>
                    <th>Abidjan</th>
                    <th>Interieur </th>
                    <th>Visuel</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td  rowspan="{{$produits->count()+1}} " style="padding-top:10%;"><a href="#{{$title}} " data-toggle="modal" class="btn btn-primary">Rapporté un autre prix</a></td>
                  </tr>
                  @foreach($produits as $produit)
                    <tr>
                            <td>{{$produit->name}} </td>
                            <td>{{$produit->pricebaby}} </td>
                            <td>{{$produit->priceint}} </td>
                            <td><img src="{{Voyager::image($produit->images)}}" width="80px"> </td>
                  @endforeach
                      </tr>
                </tbody>
    </table>
    {{ $produits->links()}}
  </div>


      <p>Prix Officiels de la semaine <strong> {{setting('site.source')}}</strong>Prix  </p>

          </div>
          <div class="col-md-3">
              <h4 class="foruma"><a href="{{route('riz')}} ">Le Riz </a></h4>
              <h4 class="foruma"><a href="{{route('sucre')}}">Le Sucre</a></h4>
              <h4 class="foruma"><a href="{{route('ciment')}} ">Le ciment</a></h4>
              <h4 class="foruma"><a href="{{route('tomate')}} ">La tomate concentrée</a></h4>
              <h4 class="foruma"><a href="{{route('huile')}} ">L'Huile rafinée </a></h4>
              <h4 class="foruma"><a href="{{route('loyers')}}">Loyers </a></h4>
              <h4 class="foruma"><a href="{{route('gaz')}}">Bouteille de Gaz </a></h4>
          </div>
      </div><br> 
  </div>
@stop
@section('Modal')
<div class="modal fade" id="Riz">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-download"></i> {{$title}} </h4>
            </div>
                <div class="modal-body">
                  <div class="row col-md-12">
                      <iframe src=https://ee.humanitarianresponse.info/i/::YKjO width="100%" height="600"></iframe>

                  </div>
                        <div class="modal-footer">
                    <button  type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Sucre">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-download"></i> {{$title}} </h4>
            </div>
                <div class="modal-body">
                  <div class="row col-md-12">
                      <iframe src=https://ee.humanitarianresponse.info/i/::YKjE width="500" height="600"></iframe>
                  </div>
                        <div class="modal-footer">
                    <button  type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop