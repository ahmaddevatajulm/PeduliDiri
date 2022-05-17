<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PerjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'id_user'=>1,
        'tanggal'=>$this->faker->date(),
        'jam'=>$this->faker->time(),
        'lokasi'=>$this->faker->randomElement
        (
            [
                'Bandung', 'Jakarta', 'Bogor', 'Cianjur', 'Semarang', 'Palangkaraya', 'Garut', 'Cicalengka', 'Purwokerto', 'Samarinda', 'Antartika'
            ]
        ),
        'suhu'=>$this->faker->numberBetween(34, 39)
        ];
    }
}
