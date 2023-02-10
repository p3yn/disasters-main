<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::firstOrCreate([
                'name' => 'Rosarito'
            ]);

        City::firstOrCreate([
                'name' => 'Tijuana'
            ]);

        City::firstOrCreate([
                'name' => 'Ensenada'
            ]);

        City::firstOrCreate([
                'name' => 'Mexicali'
            ]);
            
        City::firstOrCreate([
                'name' => 'Tecate'
            ]);
    }
}
