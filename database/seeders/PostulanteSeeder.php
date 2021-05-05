<?php

namespace Database\Seeders;

use App\Models\Postulante;
use Illuminate\Database\Seeder;

class PostulanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postulante::factory(100)->create();
    }
}
