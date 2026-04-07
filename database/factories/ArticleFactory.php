<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Article>
 */
class ArticleFactory extends Factory
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
		$category_ids = \App\Category::pluck('id')->random();
		$title = $faker->sentence(mt_rand(3,10));
		return [
			'user_id'      => $user_ids,
			'category_id'  => $category_ids,
			'last_user_id' => $user_ids,
			'slug'     => Str::slug($title),
			'title'    => $title,
			'subtitle' => strtolower($title),
			'content'  => $faker->paragraph,
			'page_image'       => $faker->imageUrl(),
			'meta_description' => $faker->sentence,
			'is_draft'         => false,
			'published_at'     => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now')
		];
    }
}
