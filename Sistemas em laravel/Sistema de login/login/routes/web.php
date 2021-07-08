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

Route::get('/login', 'App\Http\Controllers\controllerUsuario@index');
Route::get('/login/create', 'App\Http\Controllers\controllerUsuario@create');
Route::get('/login/recuperaSenha', 'App\Http\Controllers\controllerUsuario@recuperaSenha');

Route::post('/login', 'App\Http\Controllers\controllerUsuario@store');
Route::post('/login/efetuaLogin', 'App\Http\Controllers\controllerUsuario@efetuaLogin');

Route::get('/logout','App\Http\Controllers\controllerUsuario@logout');
Route::get('app_index', 'App\Http\Controllers\controlllerAplicacao@index');

Route::post('/login/recuperaSenha', 'App\Http\Controllers\controllerUsuario@solicitaRecSenha');