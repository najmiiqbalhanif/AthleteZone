<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Userhomepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/AdminHomepage', function () {
    return view('Adminhomepage');
});

Route::get('/Ushop', function () {
    return view('Ushop');
});