<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
});

Route::get('/login', function(){
    return view('auth.login');
});
