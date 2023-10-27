<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos'); 

Route::get('/contato', 'ContatoController@contato')->name('site.contato') ;

Route::get('/login', function(){return 'Login';})->name('site.login');
