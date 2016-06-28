<?php

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [
        'as' => 'admin.index',
        function(){
            return view('admin.index');
        }
    ]);

    Route::resource('robe', 'RobesController');

    Route::post('robe/filter', [
        'as' => 'admin.robe.filter',
        'uses' => 'RobesController@filter'
    ]);

    Route::resource('cliente', 'ClientesController');

    Route::get('location/cliente/{cliente_id}/create', [
        'as' => 'admin.location.cliente.create',
        'uses' => 'LocationsController@createFromCliente'
    ]);

    Route::post('location/cliente/{cliente_id}/filter_list', [
        'as' => 'admin.robe.filter_list',
        'uses' => 'RobesController@filter_list'
    ]);

    Route::post('robes/filter_list', [
        'as' => 'admin.robe.filter_list',
        'uses' => 'RobesController@filter_list'
    ]);

    Route::get('location/robe/{robe_id}/create', [
        'as' => 'admin.location.robe.create',
        'uses' => 'LocationsController@createFromRobe'
    ]);

    Route::resource('location', 'LocationsController');
});
