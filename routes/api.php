<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->group(function() {
    Route::post('restaurants', 'Api\RestaurantController@store');
});

/*
//save order
Route::middleware('auth:api')->group(function() {
    Route::post('order', 'Api\Orders@store');
});
*/
Route::group(['middleware' => ['auth:api','cors']], function () {
    Route::post('order', 'Api\Orders@store');
});

//   composer require barryvdh/laravel-cors
//   php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider"

Route::group(['middleware' => ['api','cors']], function () {
    Route::post('auth/register', 'Auth\ApiRegisterController@register');
});

// Rota para chamada do restaurante - Listar todos os restaurantes
Route::group(['middleware' => ['api','cors']], function () {
    Route::resource('restaurants', 'Api\RestaurantController');
});

// Rota para chamada do cardapio - Listar todos os cardapios de um determinado restaurante
Route::group(['middleware' => ['api','cors']], function () {
    Route::get('menus/{id}', function ($id){
        return App::call('App\Http\Controllers\api\MenusController@findByRestaurantId', ['id'=>$id]);
    });
});





