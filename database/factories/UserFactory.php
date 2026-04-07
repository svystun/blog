<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AppUser>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
		$faker = \Faker\Factory::create();
        $password = 'root';

		return [
			'name'           => $faker->name,
			'email'          => $faker->safeEmail,
			'status'         => true,
			'confirm_code'   => Str::random(64),
			'password'       => $password ?: $password = bcrypt('secret'),
			'remember_token' => Str::random(10),
		];
    }
}
