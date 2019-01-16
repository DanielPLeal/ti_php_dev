<?php

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'PessoaContatoController@index')->name('lista');
Route::post('/', 'PessoaContatoController@store');
Route::delete('/{id}','PessoaContatoController@destroy');
Route::get('/det_contato/{id}', 'PessoaContatoController@edit');
Route::post('/editar/{id}','PessoaContatoController@update');
