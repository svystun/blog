<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
		$faker = \Faker\Factory::create();
        return [
			'name'      => $faker->name,
			'parent_id' => 0,
			'path'      => $faker->url
		];
    }
}
