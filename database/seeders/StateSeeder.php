<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countryBolivia = Country::where('name', 'Bolivia')->first();

        State::insert([
            ['name' => 'Santa Cruz', 'country_id' => $countryBolivia->id],
            ['name' => 'Cochabamba', 'country_id' => $countryBolivia->id],
            ['name' => 'La Paz', 'country_id' => $countryBolivia->id],
            ['name' => 'Beni', 'country_id' => $countryBolivia->id],
            ['name' => 'Pando', 'country_id' => $countryBolivia->id],
            ['name' => 'Oruro', 'country_id' => $countryBolivia->id],
            ['name' => 'Potosi', 'country_id' => $countryBolivia->id],
            ['name' => 'Tarija', 'country_id' => $countryBolivia->id],
            ['name' => 'Chuquisaca', 'country_id' => $countryBolivia->id]
        ]);
        

    }
}
