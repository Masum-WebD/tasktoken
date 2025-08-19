<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/daily-task', function () {
    return view('daily-task');
});
