<?php

namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Episode::class;

    public function definition(): array
    {
        return [
            'season_id' => null,
            'title' => fake()->sentence(3),
            'created_at' => fake()->dateTimeBetween('-30 years'),
            'updated_at' => function (array $attrbutes){
                return fake()->dateTimeBetween($attrbutes['created_at']);
            }
        ];
    }
}
