<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinturas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 30);
            $table->string('año', 5);
            $table->string('precio', 6);
            $table->string('estado', 10);
            $table->string('imagen', 200);
            $table->text('descripcion'); 
        });
    }

    /**
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
     */
    public function down(): void
    {
        Schema::dropIfExists('pinturas');
    }
};
