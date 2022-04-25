<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionTypeSeeder extends Seeder
{
    public function run() : void
    {
        DB::table('competition_types')->insert([
            [
                'name' => 'Domestic league (medals)',
            ],
            [
                'name' => 'Domestic league (champions)',
            ],
            [
                'name' => 'Domestic cup (finals)',
            ],
            [
                'name' => 'Domestic cup (winners)',
            ],
            [
                'name' => 'League cup',
            ],
            [
                'name' => 'Super cup',
            ],
        ]);
    }
}
