<?php

use Illuminate\Database\Seeder;
use App\Director;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(GenreSeeder::class);
        
        //$this->call(DirectorSeeder::class);

        $directors = factory(Director::class, 5)->create();

        foreach ($directors as $director)
        {
            //criar 5 filmes para cada diretor
            factory(Movie::class, 5)->create([
                'director_id' => $director->id,
            ]);
        }
    }
}
