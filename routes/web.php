<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view ('home', ['title'=> 'Beranda']);
});

Route::get('/products', function () {
    return view ('products', ['title'=> 'Produk Kami']);
});
