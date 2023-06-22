<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/index', function() {
    $pinturas = [
        ['id' => 1, 'nombre' => 'primera', 'año' => '2022'],
        ['id' => 2, 'nombre' => 'segunda', 'año' => '2021'],
    ];
    
    return view('index', ['pinturas' => $pinturas]);
})->name('index');