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
Route::post('/book', 'BookController@store');
Route::get('/book', 'BookController@index')->name('Lista');
Route::put('/book/{id}', 'BookController@update')->name('Update');
Route::delete('/book/{id}', 'BookController@destroy')->name('Delete');
Route::get('/book/{id}', 'BookController@show')->name('Show');

Route::get('/book_cat/{id}', 'BookController@indexByCat')->name('index_cat');

Route::post('/Category', 'api\CategoriesController@store');
Route::get('/Category', 'api\CategoriesController@index')->name('Lista');
Route::put('/Category/{id}', 'api\CategoriesController@show')->name('Update');
Route::delete('/Category/{id}', 'api\CategoriesController@show')->name('Delete');
Route::get('/Category/{id}', 'api\CategoriesController@show')->name('Show');

Route::post('/Customer', 'api\CustomerController@store');
Route::get('/Customer', 'api\CustomerController@index')->name('Lista');
Route::put('/Customer/{id}', 'api\CustomerController@show')->name('Update');
Route::delete('/Customer/{id}', 'api\CustomerController@show')->name('Delete');
Route::get('/Customer/{id}', 'api\CustomerController@show')->name('Show');

Route::post('payment', 'api\PaymentController@store');
Route::get('/payment', 'api\PaymentController@index')->name('Lista');
Route::put('payment/{id}', 'api\PaymentController@show')->name('Update');
Route::delete('/Payment/{id}', 'api\PaymentController@show')->name('Delete');
Route::get('/Payment/{id}', 'api\PaymentController@show')->name('Show');

Route::post('/Rent', 'api\RentController@store');
Route::get('/Rent', 'api\RentController@index')->name('Lista');
Route::put('/Rent/{id}', 'api\RentController@show')->name('Update');
Route::delete('/Rent/{id}', 'api\RentController@show')->name('Delete');
Route::get('//Rent/{id}', 'api\RentController@show')->name('Show');

