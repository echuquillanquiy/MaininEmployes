<?php

namespace Database\Factories;

use App\Models\Tipo;
use App\Models\Trabajo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class TrabajoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trabajo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'user_id' => 1,
            'tipo_id' => Tipo::all()->random()->id,
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'estado' => $this->faker->randomElement([Trabajo::PUBLICADO, Trabajo::PROCESO, Trabajo::TERMINADO]),
            'slug' => Str::slug($title),
            'inicio' => Carbon::now(),
            'fin' => Carbon::tomorrow(),
        ];
    }
}
