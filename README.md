LE JUSTE PRIX 
 =============
 Le Juste prix est une plateforme qui traite les cas de corruption dans le milieu du commerce. Elle a vu le jour suite au décret n°2017-467 du 12 juillet 2017 portant plafonnement des prix et marges de certains produits..Son objectif est d'aider le ministère du commerce et l'association des consommateurs à agir efficacement à réduire le coût de la vie et à soulager les populations.
  
  ![img](https://user-images.githubusercontent.com/38228837/40359945-759e3d6e-5dd5-11e8-9a9d-8f55cbe14140.PNG)


Visitez l'application [le juste prix](https://lejusteprix.info)

<h1>Installation </h1>

 <p>Ouvrez votre terminal et tapez les commandes suivantes:</p>

 <ul>
 <li><code>git clone https://github.com/OpenAfricaInitiative/lejusteprix.git nom_duçprojet</code></li>
 <li><code>cd npm_duprojet</code></li>
 <li><code>composer install</code></li>
 <li>Renommer le fichier point .en.example en .env</li>
 <li><code>php artisan key:generate</code> pour obtenir une nouvelle cle</li>
 <li>Creer une base de donnée et connecter le a application en utilisant le fichier .env
 <ul>
  <li>DB_CONNECTION=mysql</li>
<li>DB_HOST=127.0.0.1</li>
<li>DB_PORT=3306</li>
<li>DB_DATABASE=homestead</li>
<li>DB_USERNAME=homestead</li>
  <li> DB_PASSWORD=secret</li>
 </ul>
 </li>
 <li>Si tu utilise sqlite
  <ul>
  <li>DB_CONNECTION=mysql</li>
   <li><code>touch database/database.sqlite</code> pour creer ta base de donnée</li>

 </ul>
  </li>
 </ul>
 <h1> Fonctionnalité</h1>
<ul>
 <li>Page d'accueil</li>
 <li>Pages d'erreur personnalisées 403, 404 et 503</li>
<li>Affichage du prix des produits par categorie</li>
<li>Authentification (inscription, connexion, déconnexion, réinitialisation du mot de passe, confirmation par email)</li>
<li>Tableau de bord d'administration</li>
<liProfil utilisateur avec Tableau de bord pour l'administration des articles</li>
<li>Systeme d'infinite scroll</li>
<li>Blog avec commentaires imbriqués</li>
<li>Gestion d'article(creation,modification,suppression)</li>
<li>Suppression definitif de compte </li>
<li>Articles par categories</li>
 </ul>
 <h1>Licence</h1>
   <p> Cet projet est un logiciel open source sous licence MIT</p>
