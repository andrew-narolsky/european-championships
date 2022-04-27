<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardCompetitionTypeSeeder extends Seeder
{
    public function run() : void
    {
        DB::table('award_competition_type')->insert([
            [
                'competition_type_id' => 1,
                'award_id' => 1
            ],
            [
                'competition_type_id' => 1,
                'award_id' => 2
            ],
            [
                'competition_type_id' => 1,
                'award_id' => 3
            ],
            [
                'competition_type_id' => 2,
                'award_id' => 1
            ],
            [
                'competition_type_id' => 3,
                'award_id' => 4
            ],
            [
                'competition_type_id' => 3,
                'award_id' => 5
            ],
            [
                'competition_type_id' => 4,
                'award_id' => 4
            ],
            [
                'competition_type_id' => 5,
                'award_id' => 4
            ],
            [
                'competition_type_id' => 5,
                'award_id' => 5
            ],
            [
                'competition_type_id' => 6,
                'award_id' => 4
            ],
            [
                'competition_type_id' => 6,
                'award_id' => 5
            ],
        ]);
    }
}
