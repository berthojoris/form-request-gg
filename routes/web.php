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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'ticket'], function () {
    Route::get('/', 'TicketController@index')->name('ticket_index');
    Route::post('/store', 'TicketController@store')->name('ticket_store');
});

Route::get('fileupload', 'FileuploadController@index')->name('upload_index');
Route::get('tickethistory', 'TickethistoryController@index')->name('upload_index');
