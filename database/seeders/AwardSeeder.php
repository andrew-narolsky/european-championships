<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    public function run() : void
    {
        DB::table('awards')->insert([
            [
                'name' => 'Gold',
            ],
            [
                'name' => 'Silver',
            ],
            [
                'name' => 'Bronze',
            ],
            [
                'name' => 'Winner',
            ],
            [
                'name' => 'Runner-up',
            ],
        ]);
    }
}
