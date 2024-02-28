<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Movie::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'director' => fake()->name(),
            'rating' => fake()->numberBetween(1,5),
            'created_at' => fake()->dateTimeBetween('-30 years'),
            'updated_at' => function (array $attrbutes){
                return fake()->dateTimeBetween($attrbutes['created_at']);
            }
        ];
    }

    public function good(){
        return $this->state(function(array $attributes){
            return [
                'rating' => fake()->numberBetween(4,5)
            ];
        });
    }

    public function average(){
        return $this->state(function(array $attributes){
            return [
                'rating' => fake()->numberBetween(2,5)
            ];
        });
    }

    public function bad(){
        return $this->state(function(array $attributes){
            return [
                'rating' => fake()->numberBetween(1,3)
            ];
        });
    }
}
