<?php

namespace Database\Seeders;

use App\Models\PublicService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Public_ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicService::firstOrCreate([
                'name' => 'Agua'
            ]);
    
            PublicService::firstOrCreate([
                'name' => 'Luz'
            ]);
    
            PublicService::firstOrCreate([
                'name' => 'Gas'
            ]);
    
            PublicService::firstOrCreate([
                'name' => 'Drenaje'
            ]);
    
            PublicService::firstOrCreate([
                'name' => 'Internet'
            ]);    
    }
}
