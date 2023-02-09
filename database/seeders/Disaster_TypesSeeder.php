<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Disaster_TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disaster_types')->insert([
            'name' => Str::random(10)->count(50),
            'code' => Str::random(3)->count(50)
        ]);
    }
}
