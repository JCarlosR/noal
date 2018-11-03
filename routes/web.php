<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/subscribers', 'SubscriberController@store');
