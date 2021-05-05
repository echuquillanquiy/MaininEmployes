<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();

        User::create([
            'name' => 'Eduardo Chuquillanqui',
            'username' => 'echuquillanquiy',
            'dni' => '46589634',
            'phone' => '944944199',
            'email' => 'echuquillanquiy@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
