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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/briefs', 'App\Http\Controllers\BriefController@index'); // mostrar todos los briefs
Route::post('/briefs/create', 'App\Http\Controllers\BriefController@store'); // ruta para crear
Route::put('/briefs/update/{id}', 'App\Http\Controllers\BriefController@update'); // ruta para editar un registro
Route::delete('/briefs/delete/{id}', 'App\Http\Controllers\BriefController@destroy'); // ruta para editar