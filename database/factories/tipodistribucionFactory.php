<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\estado>
 */
class tipodistribucionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'Descripcion'=>$this->faker->name(),
=======
            'id'=>$this->faker->name(),
            'Descripcion'=>$this->faker->lastname(),
>>>>>>> be0e96c7078bf928b19e5abab03d6c0c977432ed
        ];
    }
}
