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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'auth:api'], function(){
    //Clients CRUD Routes
    Route::get('clients','ClientsController@index');
    Route::get('clients/{id}','ClientsController@show');
    Route::post('clients','ClientsController@create');
    Route::put('clients/{id}','ClientsController@edit');
    Route::delete('clients/{id}','ClientsController@destroy');

    //Products CRUD Routes
    Route::get('products','ProductsController@index');
    Route::get('products/{id}','ProductsController@show');
    Route::post('products','ProductsController@create');
    Route::put('products/{id}','ProductsController@edit');
    Route::delete('products/{id}','ProductsController@destroy');

    //MIDs CRUD Routes
    Route::get('mids','MIDsController@index');
    Route::get('mids/{id}','MIDsController@show');
    Route::post('mids','MIDsController@create');
    Route::put('mids/{id}','MIDsController@edit');
    Route::delete('mids/{id}','MIDsController@destroy');

    //Orders CRUD Routes
    Route::get('orders','OrdersController@index');
    Route::get('orders/{id}','OrdersController@show');
    Route::post('orders','OrdersController@create');
    Route::put('orders/{id}','OrdersController@edit');
    Route::delete('orders/{id}','OrdersController@destroy');
});
