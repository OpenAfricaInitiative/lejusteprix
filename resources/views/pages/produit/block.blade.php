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
                    <td  rowspan="{{$produits->count()+1}} " style="padding-top: 25%"><a href="#{{$title}} " data-toggle="modal" class="btn-gr btn btn-primary">Rapporté un autre prix</a></td>
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
      <p>Prix Officiels de la semaine <strong> {{setting('site.source')}}</strong></p>
@stop