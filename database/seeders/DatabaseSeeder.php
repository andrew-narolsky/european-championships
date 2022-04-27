<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CompetitionTypeSeeder::class);
        $this->call(CompetitionTypeCountrySeeder::class);
        $this->call(CompetitionSeeder::class);
        $this->call(FootballClubSeeder::class);
        $this->call(CountryFootballClubSeeder::class);
        $this->call(AwardSeeder::class);
        $this->call(AwardCompetitionTypeSeeder::class);
//        $this->call(SeasonSeeder::class);
    }
}
