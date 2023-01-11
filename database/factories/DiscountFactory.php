<?php

namespace Database\Factories;

use App\Status\DiscountStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->randomElement(['New Year', 'Eid Mubarak', 'Graduation']);
        $code = match ($name) {
            'New Year' => 'NY2023',
            'Eid Mubarak' => 'EM1444',
            'Graduation' => 'GR2023',
            default => '',
        };
        $discountPercent = match ($name){
            'New Year' => 15,
            'Eid Mubarak' => 10,
            'Graduation' => 20,
            default => '',
        };

        $status = $this->faker->randomElement([
            DiscountStatus::active,
            DiscountStatus::inactive
        ]);

        return [
            'name' => $name,
            'code' => $code,
            'discount_percent' => $discountPercent,
            'expire' => $this->faker->dateTimeBetween('now', '+2 months'),
            'status' => $status,
        ];
    }
}
