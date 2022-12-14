<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

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

Route::get('/greet', 'App\Http\Controllers\GreetController@greet');
// Route::get('/gallery', 'App\Http\Controllers\GalleryController@index');
// Route::get('/gallery2', 'App\Http\Controllers\GalleryController@indexs');
// Route::Resource('gallery', GalleryController::class);
Route::get('/gallery', 'App\Http\Controllers\GalleryController@index');



