<!-- [FOOTER]
=============================================================================================================================-->
 <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                         <h3><strong>Pour une cote d'ivoire transparente</strong></h3>
                        <center>
                            <a href="{{route('home')}} "><img src="{{voyager::image(setting('site.logo'))}}" width="200px;" class=" img-responsive" title="Aller à la page d'Accueil"></a>
                        </center>
                       
                        <p>{{setting('site.description')}} </p> 
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Nous suivre</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="{{setting('site.facebook')}} " target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{setting('site.google')}} " target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="{{setting('site.Twitter')}}" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{setting('site.linkedin')}}" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="{{setting('site.youtube')}}" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><i class="fa fa-info-circle"></i> A Propos </h3>
                        <p>Juste prix est une plateforme  qui traite les cas de corruption dans le milieu du commerce. Elle a vu le jour suite au décret n°2017-467 du 12 juillet 2017 portant plafonnement des prix et marges de certains produits... </p><br>
                        <a style="margin-top: 20%;" href="#apropos" data-toggle="modal" class="btn-gr btn-style btn-outline"><i class="fa fa-plus-circle"></i> En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Juste Prix 2017 - Tous droits reservés. 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- A propos de nous -->
 <div class="modal fade" id="apropos"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-download"></i> A Propos</h4>
                <a type="button" class="pull-right btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></a>
            </div>
                <div class="modal-body">
                  <h2>LE JUSTE PRIX</h2>
                     <div class="col-md-12">
                        <img src="{{voyager::image(setting('site.logo'))}}" width="50%" align="left" class="img-responsive">
                          <p>Le Juste prix est une plateforme  qui traite les cas de corruption dans le milieu du commerce. Elle a vu le jour suite au décret n°2017-467 du 12 juillet 2017 portant plafonnement des prix et marges de certains produits..Son objectif est d'aider le ministère du commerce et l'association des consommateurs à agir efficacement à réduire le coût de la vie et à soulager les populations.</p>
                          <a href="images/decret.pdf" class="btn btn-primary"><i class="fa fa-download"></i> Techarger le decret</a>
                      </div>  
                        <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ DEFAULT SCRIPT ] -->
	<script src="{{asset('library/modernizr.custom.97074.js')}}"></script>
    <script src="{{asset('library/jquery-1.11.3.min.js')}}"></script>
	<script src="{{asset('js/jquery.js')}}"></script>
  	<script src="{{asset('library/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('library/vegas/vegas.min.js')}}"></script>
<!-- [ PLUGIN SCRIPT ] -->

	<script src="{{asset('js/scrollreveal.js')}}"></script>
       	 <!-- [ COMMON SCRIPT ] -->
    <script src="{{asset('js/common.js')}}"></script>
	<script src="{{asset('js/float.js')}}"></script>