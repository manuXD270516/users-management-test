<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Email;
use App\Models\Person;
use App\Models\Role;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);

        

        // Creando los roles de usuario
        Role::insert([
            [
                'role_name' => 'administrador', 
                'description' => 'administrador de usuarios de sistema', 
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'usuario privilegiado', 
                'description' => 'usuarios con privilegios limitados', 
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        $role_common_user = Role::where('role_name', 'administrador')->first();

        Person::create(
            [
                'ci' => '7713289',
                'fullname' =>'Manuel Saavedra',
                'phone' => 'phone',
                'date_birth' => now(),
                'city_id' => 1
            ]
        );

        $person = Person::find(1);

        // Creando al unico usuario administador
        User::create(
            [
                'name' => 'manuel saavedra',
                'email' => 'manu@gmail.com',
                'password' =>  Hash::make('123456478'), 
                'role_id' => $role_common_user->id,
                'person_id' => $person->id,
                'created_at' => now(),
                'updated_at' => now()
            ],
        );

        Email::factory(40)->create();

    }
}
