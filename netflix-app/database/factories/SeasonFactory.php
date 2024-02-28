<?php

namespace Database\Factories;

use App\Models\Season;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Season>
 */
class SeasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Season::class;

    public function definition(): array
    {
        return [
            'serie_id' => null,
            'title' => fake()->sentence(3),
            'created_at' => fake()->dateTimeBetween('-30 years'),
            'updated_at' => function (array $attrbutes){
                return fake()->dateTimeBetween($attrbutes['created_at']);
            }
        ];
    }
}
