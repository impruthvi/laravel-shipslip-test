<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shipslip-check', function () {
    return 'shipslip ok (0.9.0 check 2026-10-26)';
});

// Shipslip test: one request writes two log lines that share a trace_id.
Route::get('/shipslip-trace', function () {
    \Illuminate\Support\Facades\Log::warning('Checkout started (shipslip test)');
    \Illuminate\Support\Facades\Log::error('Payment retry failed (shipslip test)');

    return 'shipslip trace ok';
});
