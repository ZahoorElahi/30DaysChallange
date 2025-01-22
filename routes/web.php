<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

Route::get('/', function (): View {
    return view('home');
});
Route::get('/about', function (): View {
    return view('about');
});

Route::get('/contact', function (): View {
    return view('contact');
});

