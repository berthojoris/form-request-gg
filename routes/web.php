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
    Route::post('/profile/run', 'HomeController@updateProfile')->name('updateProfile');
    Route::get('/form-request', 'TicketController@formRequest')->name('formRequest');
    Route::get('/user-manage', 'UserController@index')->name('userManage');
    Route::get('/user-manage/edit/{user}', 'UserController@edit')->name('userEdit');
    Route::post('/user-manage/update', 'UserController@update')->name('userUpdate');
    Route::get('/user-manage/delete/{user}', 'UserController@destroy')->name('userDestroy');
    Route::post('/tickethistory/create-detail', 'TickethistoryController@store')->name('createDetail');

    Route::get('/roles', 'RoleController@index')->name('roles');
    Route::post('/roles/create', 'RoleController@create')->name('create_roles');

    Route::get('/permissions', 'PermissionController@index')->name('permissions');
    Route::post('/permissions/create', 'PermissionController@create')->name('permission_roles');

    Route::get('/download/history-file/{filename}', 'FileuploadController@downloadHistoryFile')->name('downloadHistoryFile');
    Route::get('/download/request-file/{filename}', 'FileuploadController@downloadRequestFile')->name('downloadRequestFile');


    // JSON DATA
    Route::group(['prefix' => 'data'], function () {
        Route::get('/ticket', 'TicketController@listTikectData')->name('data_ticket');
        Route::get('/user', 'UserController@userData')->name('user_data');
        Route::post('/user-store', 'UserController@store')->name('userStore');
        Route::get('/roles', 'RoleController@data')->name('roleData');
        Route::get('/permissions', 'PermissionController@data')->name('permissionData');
        Route::post('/ticket/detail', 'TicketController@detailTicket')->name('detailTicket');
    });
});