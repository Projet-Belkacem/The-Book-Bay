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

Route::get('/Creer-Panier', "PanierController@creer_panier")->name("creer_panier");
Route::get('/Mon-Panier', "PanierController@panier")->name("mon_panier");
Route::get('/Ajout-Au-Panier-Produit-{id_produit}-Quantite-{quantite}', "PanierController@ajout_panier")->name("ajout_panier");

Route::get('/Liste-Des-Ouvrages', function () {
    return view('FrontOffice.ListeProduits');
})->name("liste_des_ouvrages");

Route::get('/Contactez-Nous', function () {
    return view('FrontOffice.Contact');
})->name("contactez_nous");

Route::get('/A-Propos', function () {
    return view('FrontOffice.Apropos');
})->name("a_propos");

Auth::routes();

Route::get('admin/home', 'HomeController@adminHome')->name('admin_home')->middleware('is_admin');
