<?php

namespace Database\Seeders;

use App\Models\Requerimiento;
use App\Models\Trabajo;
use Illuminate\Database\Seeder;

class TrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trabajos = Trabajo::factory(100)->create();

        foreach ($trabajos as $trabajo)

            Requerimiento::factory(10)->create([
               'trabajo_id' => $trabajo->id,
            ]);
    }
}
