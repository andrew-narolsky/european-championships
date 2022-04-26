<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionSeeder extends Seeder
{
    public function run() : void
    {
        DB::table('competitions')->insert([
            [
                "name" => "First Division (1930-2003)",
                "country_id" => 1,
                "competition_type_id" => 2
            ],
            [
                "name" => "Kategoria Superiore (since 2003)",
                "country_id" => 1,
                "competition_type_id" => 2
            ],
            [
                "name" => "Football Cup",
                "country_id" => 1,
                "competition_type_id" => 3
            ],
            [
                "name" => "Primera Divisió",
                "country_id" => 2,
                "competition_type_id" => 2
            ],
            [
                "name" => "Copa Constitució",
                "country_id" => 2,
                "competition_type_id" => 4
            ],
            [
                "name" => "Top League (1992-2007)",
                "country_id" => 3,
                "competition_type_id" => 2
            ],
            [
                "name" => "Premier League (since 1998)",
                "country_id" => 3,
                "competition_type_id" => 2
            ],
            [
                "name" => "Armenian Cup",
                "country_id" => 3,
                "competition_type_id" => 3
            ]
        ]);
    }
}
