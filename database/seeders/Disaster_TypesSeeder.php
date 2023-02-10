<?php

namespace Database\Seeders;

use App\Models\DisasterType;
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
        DisasterType::firstOrCreate([
            'name' => 'Emergencia Policial',
            'code' => 'EMP'
            ]);

        DisasterType::firstOrCreate([
            'name' =>  'Terremoto',
            'code' => 'TRR'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Tsunami',
            'code' => 'TSU'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Incendio Urbano',
            'code' => 'INU'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Incendio Forestal',
            'code' => 'INF'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Incendio Industrial/Químico',
            'code' => 'INQ'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Inundación',
            'code' => 'IND'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Ola de Calor',
            'code' => 'ODC'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Frente Frío',
            'code' => 'FTF'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Deslizamiento de tierra',
            'code' => 'DDT'
            ]);

            DisasterType::firstOrCreate([
            'name' =>  'Ciclones/Huracanes',
            'code' => 'COH'
            ]);
    }
}
