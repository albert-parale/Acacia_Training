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

Route::get('/', function () {

    return view('home', [
        'Fwall' => App\Fwall::latest()->get()
    ]);
});

Route::post('/store', 'FwallController@store');
Route::get('/load_data', 'FwallController@load_data');
// Route::get('/{id}', 'FwallController@edit');
Route::post('/{id}', 'FwallController@destroy');
Route::put('/update', 'FwallController@update');