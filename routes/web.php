<?php

Route::get('/', 'TaskController@show'
)->name('home');

Route::post('/submit', 'TaskController@process'
)->name('submit');
