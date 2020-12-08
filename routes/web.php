<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/', 'TicketController@index')->name('ticket_index');

Route::group(['prefix' => 'ticket'], function () {
    Route::post('/store', 'TicketController@store')->name('ticket_store');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/fileupload', 'FileuploadController@index')->name('upload_index');
    Route::get('/tickethistory', 'TickethistoryController@index')->name('upload_index');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::get('/form-request', 'TicketController@formRequest')->name('formRequest');

    // JSON DATA
    Route::group(['prefix' => 'data'], function () {
        Route::get('/ticket', 'TicketController@listTikectData')->name('data_ticket');
    });
});