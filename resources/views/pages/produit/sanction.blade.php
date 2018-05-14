@extends('layouts.master')

@section('title')
  <h3><a href="{{route('home')}} "><i class="fa fa-home"></i> Accueil</a>/{{$title}}</h3>
  <h4 class="font page-header">{{$title}}</h4>
@stop

@section('contenu')         
    <div class="panel panel-success table-responsive ">
        <table class="table table-condensed table-bordered text-center" >
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>AMENDES SUR TOUS ETENDU DU TERRITOIRE</th>
                    <th>Visuel</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td  rowspan="{{$produits->count()+1}} " style="padding-top: 15%"><a href="#{{$title}} " data-toggle="modal" class="btn-gr btn btn-primary">Rapporté un autre prix</a></td>
                </tr>
                  @foreach($produits as $produit)
                <tr>
                    <td>{{$produit->name}} </td>
                    <td>{{$produit->pricebaby}} </td>
                   
                    <td><img src="{{Voyager::image($produit->images)}}" width="80px"> </td>
                  @endforeach
                </tr>
            </tbody>
        </table>
    </div>
            {{ $produits->links()}}
     
</strong></p>
@stop
@section('Modal')
<div class="modal fade" id="{{$title}}">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-download"></i> {{$title}} </h4>
            </div>
                <div class="modal-body">
                  <div class="row col-md-12">
                      <iframe src=https://ee.humanitarianresponse.info/i/::PfNbd4W5 width="100%" height="600"></iframe>

                  
                  </div>
                        <div class="modal-footer">
                    <button  type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>



@stop