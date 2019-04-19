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

Route::get("/","controllerMain@index");
Route::get("/eventos","controllerMain@eventos");
Route::get("/rankings","controllerMain@rankings");
Route::get("/tienda","controllerMain@tienda");
Route::get("/foros","controllerMain@foros");
Route::get("/login","controllerMain@login");
Route::get("/registro","controllerMain@registro");
Route::get("/createuser","controllerMain@createuser");
Route::get("/cerrarsesion","controllerMain@cerrarsesion");
