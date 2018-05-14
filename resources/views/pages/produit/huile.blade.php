@extends('layouts.master')

@include('pages.produit.block')
@section('Modal')
<div class="modal fade" id="{{$title}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-download"></i> {{$title}} </h4>
            </div>
              <div class="modal-body">
                  <div class="row col-md-12">
                      <iframe src=https://ee.humanitarianresponse.info/i/::YZTj width="500" height="600"></iframe>                   
                  </div>
                  <div class="modal-footer">
                     <button  type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                  </div>
              </div>
        </div>
    </div>
</div>



@stop