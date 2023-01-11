<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Category;
use App\Status\ProductStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement([
            ProductStatus::published,
            ProductStatus::stopped,
            ProductStatus::discounted,
            ProductStatus::seasonal,
            ProductStatus::soldOut
        ]);
        $price = $this->faker->numberBetween(80, 650);

        return [
            'category_id' => Category::all()->random()->id,
            'branch_id' => Branch::all()->random()->id,
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $price,
            'status' => $status,
        ];
    }
}
