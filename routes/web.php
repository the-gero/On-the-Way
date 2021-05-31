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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('delivery', 'DeliveriesController');
Route::get('delivery/uoa/{delivery} ', 'DeliveriesController@updateOnAccept')->name('delivery.updateOnAccept');
Route::get('delivery/uod/{delivery} ', 'DeliveriesController@updateOnDelivered')->name('delivery.updateOnDelivered');
Route::get('delivery/uou/{delivery} ', 'DeliveriesController@updateOnUndo')->name('delivery.updateOnUndo');
Route::put('delivery/uor/{delivery}/{tid} ', 'DeliveriesController@updateOnRequest')->name('delivery.updateOnRequest');
Route::resource('travels', 'TravelsController');
Route::get('/about', function () {
    return view('about');
});