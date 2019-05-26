<?php

Route::get('/', 'TaskController@index');
Route::post('/task', 'TaskController@add');
Route::delete('/task/{task}', 'TaskController@delete');