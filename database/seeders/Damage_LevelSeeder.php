<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Damage_LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disaster_types')->insert([
            'level' => integer::random(2)->count(50),
            'name' => Str::random(10)->count(50)
        ]);
    }
}
