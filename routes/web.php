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
