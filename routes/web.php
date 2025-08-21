<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/daily-task', function () {
    return view('daily-task');
});
Route::get('/invite-friends', function () {
    return view('invite-friends');
});
Route::get('/leaderboard', function () {
    return view('leaderboard');
});
Route::get('/special-task', function () {
    return view('special-task');
});


require 'admin.php';