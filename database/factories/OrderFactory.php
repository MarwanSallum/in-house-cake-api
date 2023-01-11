<?php

namespace Database\Factories;

use App\Models\Product;
use App\Status\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $orderTime = $this->faker->randomElement([
            "17:00:00",
            "18:00:00",
            "19:00:00",
            "20:00:00",
        ]);

        $status = $this->faker->randomElement([
            OrderStatus::closed,
            OrderStatus::approved,
            OrderStatus::delivered,
            OrderStatus::onDelivery,
            OrderStatus::preparing,
            OrderStatus::received
        ]);

        return [
            'product_id' => Product::all()->random()->id,
            'number' => mt_rand(12714, 98497),
            'amount' => mt_rand(217, 612),
            'shopping_fee' => mt_rand(10, 35),
            'order_date' => now(),
            'order_time' => $orderTime,
            'status' => $status,

        ];
    }
}
