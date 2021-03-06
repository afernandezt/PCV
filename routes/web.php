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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
})->name('logout');

//Trabajadores
Route::resource('worker', 'WorkerController');
Route::any('/worker', 'WorkerController@index');
Route::post('/workers/save', 'WorkerController@save')->name('saveWorker');
Route::get('/workers/add', 'WorkerController@add')->name('addWorker');
Route::get('/workers/edit/{id}', 'WorkerController@edit')->name('editWorker');
Route::get('/workers/show/{id}', 'WorkerController@show')->name('show');
Route::post('/workers/update/{id}', 'WorkerController@update')->name('wupdate');
Route::post('galery_temperal', 'WorkerController@galery_temperal')->name('temperal_galery');

//ajax
//Route::post('/saveworker', 'WorkerController@saveWorker')->name('saveWorker');

//users
Route::get('/users','UserController@index');
Route::get('/users/add', 'UserController@add');
Route::post('/users/save', 'UserController@save')->name('saveUser');

//Reportes
Route::get('/search', 'SearchController@index');
Route::post('/search/workers', 'SearchController@search')->name('showResult');
Route::post('/print/{worker}','SearchController@print')->name('print');