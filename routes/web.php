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



<<<<<<< HEAD
Auth::routes(['verify' => true]);;
=======
Auth::routes();;
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318

Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios', 'UserController');
Route::resource('roles', 'RoleController');
<<<<<<< HEAD
Route::get('/roles', 'RoleController@index')->name('roles');
=======
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
Route::resource('areas', 'AreaController');
Route::resource('reportes', 'ReporteshController');
Route::resource('trabajos', 'TrabajosController');
Route::resource('asignacions', 'AsignacionController');
Route::resource('solicituds', 'SolicitudShowController');
<<<<<<< HEAD

=======
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
