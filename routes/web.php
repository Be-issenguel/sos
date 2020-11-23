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

Route::get('/', 'SiteController@index')->name('principal');

Route::get('/faqs', function () {
    return view('site.faqs');
})->name('faqs');

Route::get('/dicas', function () {
    return view('site.dicas');
})->name('dicas');

Route::get('/comofunciona', function () {
    return view('site.comofunciona');
})->name('comofunciona');

Route::get('/sos','CampanhaController@create')->name('sos');
Route::get('/detalhes/{id}','CampanhaController@show')->name('detalhes');

Route::post('/doar', 'DoacaoController@store');

Route::get('/sos_login', function () {
    return view('site.login');
})->name('sos_login');

Route::get('/sos_register', function () {
    return view('site.register');
})->name('sos_register');

Route::post('/registar', 'UserController@store');

Auth::routes();

Route::get('/home','CampanhaController@create');

Route::post('/iniciar', 'CampanhaController@store');

Route::get('/painel','HomeController@index')->name('home');

Route::get('campanhas','CampanhaController@index');

Route::get('doacoes','DoacaoController@index');

Route::get('utlizadores','UserController@index');

Route::get('doacao/{id}','DoacaoController@show');

Route::post('aceitar','DoacaoController@aceitar');

Route::get('remover/{id}','DoacaoController@destroy');