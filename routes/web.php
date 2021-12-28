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

Route::get('/Mon-Panier', "PanierController@panier")->name("mon_panier");
Route::post('/Ajout-Au-Panier-Produit-{id_produit}-Quantite-{quantite}', "PanierController@ajout_panier")->name("ajout_panier");
Route::post('/Supprimer-Du-Panier-Produit-{id_produit}', "PanierController@supprimer_panier")->name("supprimer_panier");
Route::post('/Valider-Mon-Panier', "PanierController@valider_commande_panier")->name("valider_commande_panier")->middleware('auth');
Route::get('/Mon-Paiement', "PanierController@paiement")->name("mon_paiement")->middleware('auth');
Route::post('/Valider-Mon-Paiement', "PanierController@valider_commande_paiement")->name("valider_commande_paiement")->middleware('auth');
Route::get('/Mes-Commandes', "PanierController@mes_commandes")->name("mes_commandes")->middleware('auth');
Route::get('/Imprimer-Bon-Commande-{commande}', "PanierController@imprimer_bon_commande")->name("imprimer_bon_commande")->middleware('auth');

Route::get('/Liste-Des-Ouvrages', "AccueilController@liste_des_ouvrages")->name("liste_des_ouvrages");

Route::get('/Contactez-Nous', function () {
    return view('FrontOffice.Contact');
})->name("contactez_nous");

Route::get('/A-Propos', function () {
    return view('FrontOffice.Apropos');
})->name("a_propos");

Auth::routes();

Route::get('admin/home', 'HomeController@adminHome')->name('admin_home')->middleware('is_admin');
