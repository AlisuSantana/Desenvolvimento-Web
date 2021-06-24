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
    return view('index');
});

Route::get('/departamento', 'App\Http\Controllers\controllerDepartamento@index');
Route::get('/funcionario', 'App\Http\Controllers\controllerFuncionario@index');

Route::get('/departamento/create', 'App\Http\Controllers\controllerDepartamento@create');
Route::get('/funcionario/create', 'App\Http\Controllers\controllerFuncionario@create');

Route::post('/departamento', 'App\Http\Controllers\controllerDepartamento@store');
Route::post('funcionario', 'App\Http\Controllers\controllerFuncionario@store');

Route::get('departamento/{cd_departamento}', 'App\Http\Controllers\controllerDepartamento@show');
Route::get('funcionario/{cd_funcionario}', 'App\Http\Controllers\controllerFuncionario@show');

Route::get('funcionario/{cd_funcionario}/edit', 'App\Http\Controllers\controllerFuncionario@edit');
Route::get('departamento/{cd_departamento}/edit', 'App\Http\Controllers\controllerDepartamento@edit');

Route::put('funcionario/{cd_funcionario}', 'App\Http\Controllers\controllerFuncionario@update');
Route::put('departamento/{cd_departamento}', 'App\Http\Controllers\controllerDepartamento@update');

Route::delete('funcionario/{cd_funcionario}', 'App\Http\Controllers\controllerFuncionario@destroy');
Route::delete('departamento/{cd_departamento}', 'App\Http\Controllers\controllerDepartamento@destroy');