<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
            'name' => 'ELECTRICIDAD'
        ]);

        Tipo::create([
            'name' => 'MECÁNICA'
        ]);

        Tipo::create([
            'name' => 'MONTAJE'
        ]);

        Tipo::create([
            'name' => 'ELECTROMECANICA'
        ]);

        Tipo::create([
            'name' => 'CONSTRUCCIÓN'
        ]);
    }
}
