<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AppDiscussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
		$faker = \Faker\Factory::create();
        $user_ids = \App\User::pluck('id')->random();
		return [
			'user_id'      => $user_ids,
			'last_user_id' => $user_ids,
			'title'        => $faker->sentence,
			'content'      => $faker->paragraph,
			'status'       => true,
		];
    }
}
