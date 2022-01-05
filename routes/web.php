<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('FrontOffice.Accueil');
})->name("accueil_front_office");

Route::get('/Liste-Des-Voeux', function () {
    return view('FrontOffice.WishList');
})->name("wish_list");

Route::get('/A-Propos', function () {
    return view('FrontOffice.Apropos');
})->name("a_propos");

// Panier & gestion des commandes -FrontOffice-
Route::get('/Mon-Panier', "PanierController@panier")->name("mon_panier");
Route::post('/Ajout-Au-Panier-Produit-{id_produit}-Quantite-{quantite}', "PanierController@ajout_panier")->name("ajout_panier");
Route::post('/Supprimer-Du-Panier-Produit-{id_produit}', "PanierController@supprimer_panier")->name("supprimer_panier");
Route::post('/Valider-Mon-Panier', "PanierController@valider_commande_panier")->name("valider_commande_panier")->middleware('auth');
Route::get('/Mon-Paiement', "PanierController@paiement")->name("mon_paiement")->middleware('auth');
Route::post('/Valider-Mon-Paiement', "PanierController@valider_commande_paiement")->name("valider_commande_paiement")->middleware('auth');
Route::get('/Mes-Commandes', "PanierController@mes_commandes")->name("mes_commandes")->middleware('auth');
Route::get('/Imprimer-Bon-Commande-{commande}', "PanierController@imprimer_bon_commande")->name("imprimer_bon_commande")->middleware('auth');

// Recherche multicritéres et choix des ouvrage -FrontOffice-
Route::get('/Liste-Des-Ouvrages', "AccueilController@liste_des_ouvrages")->name("liste_des_ouvrages");

// Contact et soumision des bons de commandes -FrontOffice-
Route::get('/Contactez-Nous', "ContactController@contactez_nous")->name("contactez_nous");
Route::post('/Contactez-Nous', "ContactController@post_contactez_nous")->name("post_contactez_nous");

// Accueil de l'admin -BackOffice-
Route::get('/The-Dashboard', 'HomeController@adminHome')->name('admin_home')->middleware('is_admin');

// Gestion des ouvrages
Route::get('/The-Dashboard/Gestion-Des-Ouvrages', 'GestionOuvragesController@index')->name('gestion_ouvrages')->middleware('is_admin');
Route::post('/The-Dashboard/Gestion-Des-Ouvrages/Ajouter-Un-Ouvrage', 'GestionOuvragesController@ajouter_ouvrage')->name('ajouter_ouvrage')->middleware('is_admin');
Route::post('/The-Dashboard/Gestion-Des-Ouvrages/Modifier-Un-Ouvrage/{ouvrage}', 'GestionOuvragesController@modifier_ouvrage')->name('modifier_ouvrage')->middleware('is_admin');
Route::post('/The-Dashboard/Gestion-Des-Ouvrages/Supprimer-Un-Ouvrage/{ouvrage}', 'GestionOuvragesController@supprimer_ouvrage')->name('supprimer_ouvrage')->middleware('is_admin');


// Scaffold d'authentification AUTH : généré automatiquement lors du build
Auth::routes();
