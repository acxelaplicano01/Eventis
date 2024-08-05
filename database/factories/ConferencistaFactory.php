<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Nacionalidad;
use App\Models\Tipoperfil;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conferencista>
 */
class ConferencistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nacionalidadId = Nacionalidad::inRandomOrder()->first()->id;
        $tipoPerfilId = Tipoperfil::inRandomOrder()->first()->id;
        return [
         'Titulo' => $this->faker->sentence,
         'Descripcion' => $this->faker->paragraph,
         'Foto' => $this->faker->imageUrl(),      
         'created_by' => 1
        ];
    }
}
