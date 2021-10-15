<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hw = new Libro();
        $hw->titulo = "El principito";
        $hw->autor = "Antoni";
        $hw->editorial = "Salamandra";
        $hw->fecha_public = "13/05/2017";
        $hw->num_pag = "160";
        $hw->save();
        $hw2 = new Libro();
        $hw2->titulo = "El barco";
        $hw2->autor = "Armando";
        $hw2->editorial = "Alma";
        $hw2->fecha_public = "13/05/1987";
        $hw2->num_pag = "360";
        $hw2->save();
    }
}
