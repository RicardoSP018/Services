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



Auth::routes();;

Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('areas', 'AreaController');
Route::resource('reportes', 'ReporteshController');
Route::resource('trabajos', 'TrabajosController');
Route::resource('asignacions', 'AsignacionController');
Route::resource('solicituds', 'SolicitudShowController');
