<?php

Route::get('/', 'TaskController@show')->name('home');

Route::post('/submit', 'TaskController@process')->name('submit');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Task'], function (){
        Route::get('/task', 'IndexController@Show')->name('admin.task.index');
    });
});
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
