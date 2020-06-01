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

Route::get('/', 'Index\Index@index');

Route::get('/company/{id}', 'Index\Company@index');
Route::get('/company', 'Index\Company@add');
Route::post('/company', 'Index\Company@save');
Route::post('/company/{id}', 'Index\Company@list');
Route::get('/company/{id}/message', 'Index\Message@list');

Route::get('/message/{id}', 'Index\Message@add');
Route::post('/message/{id}', 'Index\Message@save');
Route::get('/message/real/{id}', 'Index\Message@real');
Route::get('/message/fake/{id}', 'Index\Message@fake');

Route::get('/reset', 'Index\Index@reset');
Route::get('/data', 'Index\Index@data');
Route::get('/about', 'Index\Index@about');