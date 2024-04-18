<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'family_name' => fake()->name(),
            'mother' => fake()->name(),
            'country_id' => 1,
            'city_id' => rand(1,18),
            'address' => fake()->name(),
            // 'phone1' => rand(1,18),
            // 'phone2' => rand(1,18),
            'birth_date' => fake()->date(),
            'status_id' => rand(1,4),
            'department_id' => rand(1,25),
            'unit_id' => rand(1,10),
            'position_id' => rand(1,4),
            'user_id' => 1,
        ];
    }
}
