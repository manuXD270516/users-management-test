<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            ['name' => 'Bolivia', 'phone_code' => 591],
            ['name' => 'Argentina', 'phone_code' => 412],
            ['name' => 'Chile', 'phone_code' => 321]
        ]);
    }
}
