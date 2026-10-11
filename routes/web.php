<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shipslip-check', function () {
    return 'shipslip ok (guide test)';
});

Route::get('/shipslip-boom', function () {
    throw new RuntimeException('Shipslip new-error test: this route fails on purpose.');
});
