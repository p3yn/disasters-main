<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;

// use App\Models\Disaster;
// use App\Models\DamageLevel;
// use App\Models\DisasterType;

use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\Damage_LevelSeeder;
use Database\Seeders\Public_ServicesSeeder;
use Database\Seeders\Disaster_TypesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CitySeeder::class,
            Public_ServicesSeeder::class,
            Damage_LevelSeeder::class,
            Disaster_TypesSeeder::class
        ]);

        // DisasterType::firstOrCreate([
        //     'name' =>  'Emergencia Policial',
        //     'code' => 'EMP'
        // ]);

        // Disaster::firstOrCreate([
        //     'date' => '',
        //     'time' => '',
        //     //'location' =>  '32.527258' ,'-117.121486',
        //     'casualties' => '300',
        //     'description' => 'Desastre ocurrido en el parque méxico de playas de tijuana, perro atropellado'

        // ]);


    }
}
