<?php

namespace Database\Factories;

use App\Models\Lagu;
use App\Models\RiwayatLagu;
use App\Models\User;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatLagu>
 */
class RiwayatLaguFactory extends Factory
{
    protected $model = RiwayatLagu::class;

    public function definition(): array
    {
        return [
            'user_id' => Users::inRandomOrder()->first()->id_user ?? User::factory(),
            'lagu_id' => Lagu::inRandomOrder()->first()->id_lagu ?? Lagu::factory(),
            'played_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
