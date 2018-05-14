@extends('layouts.base',['title'=>'Blog'])
@section('container')
<div class="jumbotron top">
      <div class="container-fuild">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">{{setting('site.title')}} </h1>
                    <hr class="small">
                    <p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">{{setting('site.description')}} </p>
                </div>
            </div>
        </div>
    </div>
<div class="container ">
      <div class="row">
          <img src="{{Voyager::image(auth::user()->avatar)}}" class="img-circle" width="50px" align="left">
          <p>Ecrit par <strong>{{auth::user()->name}}</strong></p>
          <p><i class="fa fa-clock-o"></i> {{date('d/m/Y @ H:i:s')}} </p>
      </div>
      <div class="row">
          <form action="{{route('article')}} " method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
          <div class="col-md-8">
              <div class="form-group floating-label-form-group controls {{$errors->has('title') ?'has-error':'' }}">
                    <div class="row">
                      <p>Les champs comportant ce <span class="text-danger">*</span> sont obligatore</p>
                        <label class="label-control " for="title">Titre de l'article<span class="text-danger">*</span></label>
                        <input type="text" id="title" name="title" class=" form-control" placeholder="Tire de l'article"  value="{{old('title')}}"  aria-describedby="basic-addon1" >
                    </div>
                       {!! $errors->first('title','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                </div>
              <div class="ecart form-group {{$errors->has('contenu') ?'has-error':'' }}">
                  <h3>Contenu de l'article<span class="text-danger">*</span> </h3>
                  <textarea required="required" rows="35" cols="135" name="contenu" class="content" id="editor">{{old('contenu')}}</textarea>
                  {!! $errors->first('content','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                  <p class="label label-danger"><strong>Notice:</strong> Votre article sera traiter dans les 24h qui suivre</p>
              </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default {{$errors->has('extrait') ?'has-error':'' }}">
                <div class="panel-heading">Extrait: courte description de l'article</div>
                <div class="panel-body">
                    <textarea name="extrait" id="extrait" cols="5" rows="5" class="form-control">{{old('extrait')}} </textarea>    
                     {!! $errors->first('extrait','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                </div>
            </div>
            <div class="panel panel-info {{$errors->has('image') ?'has-error':'' }}">
                <div class="panel-heading">Image de couverture</div>
                <div class="panel-body">
                    <input type="file" name="image" value="{{old('image')}} ">
                    {!! $errors->first('image','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                </div>
            </div>
            <div class="panel panel-primary {{$errors->has('categorie') ?'has-error':'' }}">
                <div class="panel-heading">Choisir une categorie <span class="text-danger">*</span></div>
                <div class="panel-body">
                    <select name="categorie" class="form-control" required="required">
                        <option value="">Selectionner une categorie</option>
                        @foreach($categories as $category)
                        	<option value="{{old('categorie')?? $category->id}} ">{{$category->name}}</option>
                    	@endforeach
                    </select> 
                       {!! $errors->first('categorie','<p class="help-block " style="font-size:17px"> :message</p>') !!}

                </div>
            </div>
          </div>
          <div class="form-group">
              <button type="submit"  class="btn btn-success btn-lg btn-block"> <i class="fa fa-send"></i> Soumettre l'article</button> 
          </div>
    </form>
</div>      
            
</div><br>
@stop
@section('script')        
       <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

{{--         <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-beta.3/classic/ckeditor.js"></script>
 --}}     

<script>
      CKEDITOR.replace( 'contenu' );
    </script>
 {{--    <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script> --}}
  <script>
          $(document).ready(function() {

            $('.extrait').keyup(function(){
               var extrait= $(this).val();
               $('#extrait').text(extrait);
            });
           })  
        </script>
@stop