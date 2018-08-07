<?php

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
    return view('home');
});

Route::resource('bancos', 'Adm_Sgos\BancosController');

Route::resource('propiedades', 'Adm_Sgos\PropiedadesController');

Route::resource('bovedas', 'Adm_Sgos\BovedasController');

Route::resource('divisas', 'Adm_Sgos\DivisasController');

Route::resource('sectores', 'Adm_Sgos\SectorController');