<?php

namespace Database\Factories;

use App\Models\Lagu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lagu>
 */
class LaguFactory extends Factory
{
    protected $model = Lagu::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this ->faker->sentence(3),
            'filename' => $this->faker->lexify('lagu_????.mp3'),
            'artis' => $this->faker->name(),
            'album' => $this->faker->word(),
            'cover_album' => $this->faker->imageUrl(200, 200, 'music'),
            'created_at' => now(),
        ];
    }
}
