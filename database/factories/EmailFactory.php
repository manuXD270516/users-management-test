<?php

namespace Database\Factories;

use App\Models\Email;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Email::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::where('email','manu@gmail.com')->first();

        return [
            'subject' => $this->faker->sentence(2),
            'sender' => $this->faker->safeEmail(),
            'to' => $this->faker->safeEmail(),
            'content' => $this->faker->text(200),
            'state' => $this->faker->randomElement(['enviado']),
            'user_id' => $user->id, 
        ];
    }
}
