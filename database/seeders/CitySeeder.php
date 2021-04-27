<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            ['name' => 'Santa Cruz de la Sierra', 'state_id' => 1],
            ['name' => 'Cochabamba', 'state_id' => 2],
            ['name' => 'La Paz', 'state_id' => 3],
            ['name' => 'Trinidad', 'state_id' => 4],
            ['name' => 'Pando', 'state_id' => 5],
            ['name' => 'Oruro', 'state_id' => 6],
            ['name' => 'Potosi', 'state_id' => 7],
            ['name' => 'Tarija', 'state_id' => 8],
            ['name' => 'Sucre', 'state_id' => 9]
        ]);
    }
}
