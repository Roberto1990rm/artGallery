<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/index', function() {
    $pinturas = [
        [
          'id' => 1,
          'nombre' => 'primera',
          'año' => '2022',
          'precio' => '$100',
          'estado' => 'vendido',
          'imagen' => '/img/pintura1.png',
          'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. At delectus modi iste ducimus nesciunt animi veritatis omnis quaerat reiciendis necessitatibus? Nihil sint voluptates incidunt consequuntur est, quis aut natus. Enim. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eligendi nulla aliquid amet laboriosam, est tempora repellendus enim at ea. Harum hic placeat assumenda fugiat eveniet ab aut. Exercitationem, incidunt.",
        ],
        [
          'id' => 2,
          'nombre' => 'segunda',
          'año' => '2021',
          'precio' => '$100',
          'estado' => 'vendido',
          'imagen' => '/img/pintura.png',
          'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. At delectus modi iste ducimus nesciunt animi veritatis omnis quaerat reiciendis necessitatibus? Nihil sint voluptates incidunt consequuntur est, quis aut natus. Enim. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eligendi nulla aliquid amet laboriosam, est tempora repellendus enim at ea. Harum hic placeat assumenda fugiat eveniet ab aut. Exercitationem, incidunt.",
        ],
        [
          'id' => 3,
          'nombre' => 'tercera',
          'año' => '2023',
          'precio' => '$150',
          'estado' => 'disponible',
          'imagen' => '/img/pintura1.png',
          'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. At delectus modi iste ducimus nesciunt animi veritatis omnis quaerat reiciendis necessitatibus? Nihil sint voluptates incidunt consequuntur est, quis aut natus. Enim. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eligendi nulla aliquid amet laboriosam, est tempora repellendus enim at ea. Harum hic placeat assumenda fugiat eveniet ab aut. Exercitationem, incidunt.",
        ],
    ]; 
    return view('index', ['pinturas' => $pinturas]);
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');
