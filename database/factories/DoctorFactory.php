<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'specialty' => $this->faker->randomElement(['Cardiology', 'Neurology', 'Orthopedics', 'General', 'Pediatrician']),
            'phone_number' => substr($this->faker->unique()->numerify('###########'), 0, 15)
        ];
    }
}