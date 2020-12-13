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
Route::get('/show','Crud@index');
Route::get('/registrar','Crud@create');
Route::get('/detail/{id}','Crud@show');
Route::get('/delete/{id}','Crud@destroy');
Route::post('/save','Crud@store');
Route::post('/update','Crud@update');

Route::get('/', 'EstructurasDeControl@login');

Route::post('valida','EstructurasDeControl@validarlogin');

