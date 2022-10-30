<?php

Route::get('/', 'TaskController@show')->name('home');

Route::post('/submit', 'TaskController@process')->name('submit');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::group(['namespace' => 'Task'], function (){
        Route::get('/task', 'IndexController@Show')->name('admin.task.index');
        Route::get('/task/{id}', 'IndexController@editTask')->name('admin-task-edit');
        Route::post('/task/{id}', '\App\Http\Controllers\TaskController@update')->name('admin-task-edit-apply');
    });
});
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');