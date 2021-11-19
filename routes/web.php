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

Route::get('/Mon-Panier', function () {
    return view('FrontOffice.Panier');
})->name("mon_panier");

Route::get('/Liste-Des-Ouvrages', function () {
    return view('FrontOffice.ListeProduits');
})->name("liste_des_ouvrages");

Route::get('/Contactez-Nous', function () {
    return view('FrontOffice.Contact');
})->name("contactez_nous");

Route::get('/A-Propos', function () {
    return view('FrontOffice.Apropos');
})->name("a_propos");
