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
    return view('welcome');
});

Route::get('/atores','App\Http\Controllers\AtoresController@index')
    ->name('atores.index');

Route::get('/atores/{id}/show','App\Http\Controllers\AtoresController@show')
    ->name('atores.show');

Route::post('/atores/store','App\Http\Controllers\AtoresController@store')
    ->name('atores.store');    

Route::get('/atores/create','App\Http\Controllers\AtoresController@create')
    ->name('atores.create');  

Route::patch('/atores/{id}','App\Http\Controllers\AtoresController@update')
        ->name('atores.update'); 

Route::get('/atores/{id}/edit','App\Http\Controllers\AtoresController@edit')
        ->name('atores.edit');         








Route::get('/filmes','App\Http\Controllers\FilmesController@index')
    ->name('filmes.index');

Route::get('/filmes/{id}/show','App\Http\Controllers\FilmesController@show')
    ->name('filmes.show');

Route::post('/filmes/store','App\Http\Controllers\FilmesController@store')
    ->name('filmes.store'); 

Route::get('/filmes/create','App\Http\Controllers\FilmesController@create')
    ->name('filmes.create');   

Route::patch('/filmes/{id}','App\Http\Controllers\FilmesController@update')
        ->name('filmes.update'); 

Route::get('/filmes/{id}/edit','App\Http\Controllers\FilmesController@edit')
        ->name('filmes.edit');





Route::get('/generos','App\Http\Controllers\GenerosController@index')
    ->name('generos.index');

Route::get('/generos/{id}/show','App\Http\Controllers\GenerosController@show')
    ->name('generos.show');

Route::post('/generos/store','App\Http\Controllers\GenerosController@store')
    ->name('generos.store');       

Route::get('/generos/create','App\Http\Controllers\GenerosController@create')
    ->name('generos.create');    

Route::patch('/generos/{id}','App\Http\Controllers\GenerosController@update')
        ->name('generos.update');   

Route::get('/generos/{id}/edit','App\Http\Controllers\GenerosController@edit')
        ->name('generos.edit');          


















