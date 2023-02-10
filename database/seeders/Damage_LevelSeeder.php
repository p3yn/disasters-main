<?php

namespace Database\Seeders;

use App\Models\DamageLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Damage_LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DamageLevel::firstOrCreate([
            'level' => 0,
            'name' => 'Sin daño'
        ]);
        
        DamageLevel::firstOrCreate([
            'level' => 1,
            'name' => 'Daño mínimo'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 2,
            'name' => 'Daño Ligero'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 3,
            'name' => 'Daño Moderado'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 4,
            'name' => 'Daño Medio'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 5,
            'name' => 'Daño Sustancial'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 6,
            'name' => 'Daño Severo'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 7,
            'name' => 'Daño Extremo'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 8,
            'name' => 'Total'
        ]);

        DamageLevel::firstOrCreate([
            'level' => 9,
            'name' => 'Colapso'
        ]);
        //DamageLevel::factory(10)->create();            
    }
}
