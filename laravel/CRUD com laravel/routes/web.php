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

Route::get('/aluno', 'App\Http\controllers\alunoController@index');

Route::get('/aluno/create', 'App\Http\controllers\alunoController@create');

Route::post('/aluno', 'App\Http\controllers\alunoController@store');

Route::get('/aluno/{cd_aluno}', 'App\Http\controllers\alunoController@show');

Route::get('/aluno/{cd_aluno}/edit', 'App\Http\controllers\alunoController@edit');

Route::put('/aluno/{cd_aluno}', 'App\Http\controllers\alunoController@update');

Route::delete('/aluno/{cd_aluno}', 'App\Http\controllers\alunoController@destroy');