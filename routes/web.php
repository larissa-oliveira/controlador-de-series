<?php

Route::get('/', 'SeriesController@index')->name('listar_series');
Route::get('/series/adicionar', 'SeriesController@create')->name('form_adicionar_series');

Route::post('/series/adicionar', 'SeriesController@store');
Route::delete('/series/{id}', 'SeriesController@destroy');