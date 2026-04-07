<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AppLink>
 */
class LinkFactory extends Factory
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
			'name'  => $faker->name,
			'link'  => $faker->url,
			'image' => $faker->imageUrl()
		];
    }
}
