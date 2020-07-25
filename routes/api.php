<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('reportes', 'ReporteController');
Route::resource('solicitudes', 'SolicitudController');
Route::resource('asignaciones', 'AsignacionApiController');
Route::resource('areas', 'AreaApiController');
Route::resource('roles', 'RoleApiController');
Route::resource('trabajos', 'TrabajosApiController');
Route::post('register', 'Auth\RegisterController@register');
Route::post('ingresar', 'Auth\LoginController@ingresar');
Route::post('salir', 'Auth\LoginController@salir');
