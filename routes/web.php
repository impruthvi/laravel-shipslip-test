<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shipslip-check', function () {
    return 'shipslip ok';
});
