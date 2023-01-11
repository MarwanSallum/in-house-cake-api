<?php

namespace Database\Factories;

use App\Models\User;
use App\Status\BranchStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use function MongoDB\BSON\toJSON;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $settings = [
            "logo" => "LOGO",
            "instagram_account" => $this->faker->userName(),
            "working_days" => [
                "sun" => true,
                "mon" => true,
                "tu" => false,
                "we" => false,
                "th" => true,
                "fr" => true,
                "sa" => false,
            ],
            "working_times" => [
                "17:00:00" => true,
                "18:00:00" => true,
                "19:00:00" => true,
                "20:00:00" => true,
            ],
        ];
        return [
            'user_id' => User::all()->random()->id,
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'settings' => json_encode($settings),
            'status' => $this->faker->randomElement([
                BranchStatus::open,
                BranchStatus::closed,
                BranchStatus::incorporation,
                BranchStatus::suspended
                ]),
        ];
    }
}
