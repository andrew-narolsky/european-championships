<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run() : void
    {
        DB::table('users')->insert([
            'name' => 'Andrew',
            'email' => 'admin@netfixcms.dev',
            'password' => bcrypt('123456')
        ]);
    }
}
