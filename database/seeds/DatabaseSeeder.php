<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(MoviesSeeder::class);
        $this->call(TrendingSeeder::class);
    }
}
