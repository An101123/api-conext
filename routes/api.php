<?php

<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\BusinessTypeController;
=======
use App\Http\Controllers\ExpertiseController;
>>>>>>> CRUD-Expertise
=======
use App\Http\Controllers\LocalConextController;
>>>>>>> CRUD-LocalConext
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
<<<<<<< HEAD
<<<<<<< HEAD
Route::resource('businessTypes', BusinessTypeController::class);
=======
Route::resource('expertises', ExpertiseController::class);  
>>>>>>> CRUD-Expertise
=======
Route::resource('localConexts', LocalConextController::class);
>>>>>>> CRUD-LocalConext
