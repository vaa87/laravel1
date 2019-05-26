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


/**
 * Вывести панель с задачами
 */
Route::get('/', function () {
    return view('tasks');
});

/**
 * Добавить новую задачу
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * Удалить задачу
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});