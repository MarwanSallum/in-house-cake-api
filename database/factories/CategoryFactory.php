<?php

namespace Database\Factories;

use App\Status\CategoryStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement([
                CategoryStatus::active,
                CategoryStatus::inactive,
                CategoryStatus::stopped,
            ])
        ];
    }
}
