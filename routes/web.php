<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PinturasController;

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('/pinturas/create', [HomeController::class, 'create'])->name('pinturas.create');
Route::post('/pinturas', [PinturasController::class, 'store'])->name('pinturas.store');

Route::get('/pinturas', [PinturasController::class, 'pinturas'])->name('pinturas')->withoutMiddleware(['auth']);

Route::get('/pinturas/{id}/edit', [PinturasController::class, 'edit'])->name('pinturas.edit');
Route::put('/pinturas/{id}', [PinturasController::class, 'update'])->name('pinturas.update');
Route::get('/pinturas/{id}', [PinturasController::class, 'show'])
    ->name('pinturas.show')
    ->withoutMiddleware(['auth']);
Route::delete('/pinturas/{id}', [PinturasController::class, 'destroy'])->name('pinturas.destroy');

Route::get('/contact', [PinturasController::class, 'contact'])->name('contact');
Route::post('/contact', [PinturasController::class, 'storeContact'])->name('contact.storeContact');
Route::get('/contact/success', [PinturasController::class, 'contactSuccess'])->name('contact_success');
