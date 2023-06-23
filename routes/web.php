<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PinturasController;

Route::get('/', function () {
    return view('home');
})->name('Home');



Route::get('/pinturas', [PinturasController::class, 'pinturas'])->name('pinturas');
Route::get('/pinturas/{id}', [PinturasController::class, 'show'])->name('pintura');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/success', function () {
  return view('contact_success');
})->name('contact.success');

Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');
