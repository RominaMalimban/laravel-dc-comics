<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake()-> firstname(),
            'lastName' => fake()-> lastname(),
            'dateOfBirth' => fake()->dateTime(),
            'height'=> fake()-> numberBetween(130, 200),
        ];
    }
}
