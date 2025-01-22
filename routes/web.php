<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function (): View {
    return view('about');
});
