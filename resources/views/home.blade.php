@extends('layouts.base',['title'=>"Accueil"])

@section('container')
    <section class="main-gallery" id="home">
	    <div class="overlay">
	      <div class="container">
	          <div class="row">
	              <div class="col-md-12 text-center">
	                 	<h1 class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">{{setting('site.title')}} </h1>
	                	<p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">{{setting('site.description')}} </p>
	              </div>
	              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
	                <div class="text-center top40">
	                    <a href="{{route('price')}} " class=" btn btns theme_background_color white fadeInLeft" ><i class="fa fa-bullhorn"></i>  PRIX officiel</a>
	                    <a href="{{route('blog')}} " class="btn btns white-background themecolor fadeInDown" style="width: 250px"><i class="fa fa-wechat"></i> discussions</a>
	                    <a href="statistique.php"  class="btn btns black-background white fadeInRight" style="width: 250px"><i class="fa fa-line-chart"></i> Statistiques</a>
	                </div>
	              </div>
	          </div>
	      </div>
	    </div>
	</section>
  
  
  <!-- [/MAIN GALLERY]
=============================================================================================================================-->
  

 
 <!-- [TEMOIGNAGE]
=============================================================================================================================-->
 <section class="testimonial" id="testimonial-s">
     <div class="overlay">
     <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2>ILS ONT TESTES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/homme.jpg" alt="client"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/client-2.jpg" alt="client"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/client-3.jpg" alt="clinet"></li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">

                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                                            <p>Ce que j’apprécie vraiment dans Sur la plateforme LE JUSTE PRIX, c’est que c’est un outil pratique de suivi des prix en temps réel, mieux m'orienté pour l'achat des produits. Avec LE JUSTE PRIX, c’est plus facile d’adopter de bonnes habitudes.</p>
                                            <small>M.Barry, Marcory!</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                                            <p>Mon application mobile LE JUSTE PRIX est devenue un partenaire fidèle dans ma mission quotidienne de contrôle de prix.</p>
                                            <small>Alice, Yopougon</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                                            <p>Avec LE JUSTE PRIX, je peux vraiment comparer les prix des differents produits en temps réel. Auparavant, je ne pouvais pas savoir quel etait le prix fixé par l'Etat sur les differents produit sur le marché.</p>
                                            <small>Yavo, Agboville</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Carousel Buttons Next/Prev -->

                    </div>
                </div>
            </div>
        </div>
     </div>
 </section>
 
 <!-- [/APPLI WEB]
=============================================================================================================================-->
 
    <section class="bi mobile-app theme_background_color" id="feature">
     <div class="row">
     <div class="col-md-8">
      <div class="container">
            <div class="row text-center">
                <div class="app-heading">
                    <h2 class="sectionTitle">Transparence des Prix</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 featured-content">
                    <div class="app-icon-box">

                        <div class="app-content-phone text-right">
                            <h4>Prix réel des produits</h4>

                            <p>
                              Connaitre le prix réel pour mieux défendre la transparence.
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                    <div class="app-icon-box">
                        <div class="app-content-phone text-right">
                            <h4>Un monde de transparence</h4>
                            <p>
                               Une côte d'ivoire où la transparence est une réalité. Cela est possible grâce à vos contributions
                            </p>
                        </div>
                        <div class="app-icon">
                           <span class="themecolor text-center"><i class="fa fa-globe"></i></span>
                        </div>
                    </div>
                    <div class="app-icon-box">
                        <div class="app-content-phone text-right">
                            <h4>Un regard méticuleux </h4>
                            <p>
                                Un regard méticuleux pour une transparence sans faille grâce à vos dénonciations.                            
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="images/iphone6-plus.png" class="iphone-image" alt="iPhpone" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">
                </div>
               
            </div>
        </div>
      </div>
        <div class="eloigner col-md-4">
          <img src="{{voyager::image(setting('site.logo'))}}" class="img-responsive" width="500PX">
          <center><a href="#appli" data-toggle="modal" class="btn btn-style">Application mobile</a></center>
        </div>
      </div>
  </section>
 <!-- [/MOBILE APPLICATION]
=============================================================================================================================-->
   
 <!-- [SUBSCRIBE]
=============================================================================================================================-->
 <section class="contactus" id="contact">
     <div class="container">
         <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2 class="grey">CONTACTEZ-NOUS</h2>
                    </div>
                </div>
            </div>
         <div class="gap"></div>
     <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
 			<form method="POST" action="{{route('contact')}}">
        {{csrf_field()}}
                <div class="row form-group floating-label-form-group controls {{$errors->has('name') ?'has-error':'' }}">
                    <div class="form-group col-xs-12">
                      <label class="label-control" for="name">Nom complet</label>
                      <input type="text" id="name" name="name" class="form-control" placeholder="Nom"  value="{{old('name')}}" >
                      {!! $errors->first('name','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                      <p class="help-block text-error"></p>
                   </div>
               </div>
                <div class="row form-group floating-label-form-group controls {{$errors->has('email') ?'has-error':'' }}">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                       	<label>Adresse Email</label>
                            <input name="email" type="email" id="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                             {!! $errors->first('email','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                          <p class="help-block text-error"></p>
                    </div>  
               	</div>
                <div class="row form-group floating-label-form-group controls {{$errors->has('message') ?'has-error':'' }}">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Message</label>
                        <textarea name="message"  rows="4" placeholder="Message"  class="form-control">{{old('message') }}</textarea>
                     {!! $errors->first('message','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                      <p class="help-block text-error"></p>
                    </div>
                </div><br>
                        <button class="btn btn-style"> Envoyer</button>
           </form>
        </div>
   	</div>
</div>
</section>
 <!--  [CONTACT INFO ENDS ]-->
@endsection

@section('Modal')
   <div class="modal fade" id="appli"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-download"></i> Téléchargement</h4>
            </div>
                <div class="modal-body">
                     <div class="col-md-6">
                        <h2>Android</h2>
                        <img src="images/iphone6-plus.png" width="50%"  class="img-responsive">
                        <center><a href="images/justeprix.apk" download="" class="btn btn-style" style="color: #000;"><i class="fa fa-android" ></i> Télécharger</a></center>
                     </div> 
                      <div class="col-md-6">
                          <h2>Apple </h2>
                          <img src="images/iphone6-plus.png" width="50%"  class="img-responsive">
                          <center><a href="images/justeprix.ipa" download="" class="btn btn-style" style="color: #000;"><i class="fa fa-apple" ></i> Télécharger</a></center>
                     </div>  
                        <div class="modal-footer">
                    <button  type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

	<script type="text/javascript">
    $(document).ready(function()
    {
        fullscreenslider();
    }
     );
    
 </script>

@stop
