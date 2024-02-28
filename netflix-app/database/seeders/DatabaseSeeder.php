<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Episode;
use App\Models\Movie;
use App\Models\Season;
use App\Models\Serie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Serie::factory(20)->good()->create()->each(function($serie){
            $numSeasons = random_int(1,10);
            Season::factory()->count($numSeasons)
                ->for($serie)
                ->create()->each(function($season){
                    $numEpisodes = random_int(5,10);
                    Episode::factory()->count($numEpisodes)
                    ->for($season)
                    ->create();

                });
        });

        Serie::factory(20)->bad()->create()->each(function($serie){
            $numSeasons = random_int(1,10);
            Season::factory()->count($numSeasons)
                ->for($serie)
                ->create()->each(function($season){
                    $numEpisodes = random_int(5,10);
                    Episode::factory()->count($numEpisodes)
                    ->for($season)
                    ->create();

                });
        });

        Serie::factory(20)->average()->create()->each(function($serie){
            $numSeasons = random_int(1,10);
            Season::factory()->count($numSeasons)
                ->for($serie)
                ->create()->each(function($season){
                    $numEpisodes = random_int(5,10);
                    Episode::factory()->count($numEpisodes)
                    ->for($season)
                    ->create();

                });
        });

        Movie::factory(30)->average()->create();
        Movie::factory(30)->good()->create();
        Movie::factory(30)->bad()->create();

    }
}
