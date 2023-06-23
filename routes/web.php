<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PinturasController;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/pinturas/create', [HomeController::class, 'create'])->name('pinturas.create');
Route::post('/pinturas', [PinturasController::class, 'store'])->name('pinturas.store');

Route::get('/pinturas', [PinturasController::class, 'pinturas'])->name('pinturas');
Route::get('/pinturas/{id}/edit', [PinturasController::class, 'edit'])->name('pinturas.edit');
Route::put('/pinturas/{id}', [PinturasController::class, 'update'])->name('pinturas.update');
Route::get('/pinturas/{id}', [PinturasController::class, 'show'])->name('pinturas.show');
Route::delete('/pinturas/{id}', [PinturasController::class, 'destroy'])->name('pinturas.destroy');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/success', function () {
  return view('contact_success');
})->name('contact.success');

Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');
