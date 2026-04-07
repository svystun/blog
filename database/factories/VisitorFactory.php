<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AppVisitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
		$faker = \Faker\Factory::create();
		$article_id = \App\Article::pluck('id')->random();
		$num = $faker->numberBetween(1, 100);

		$article = \App\Article::find($article_id);
		$article->view_count = $num;
		$article->save();

		return [
			'article_id' => $article_id,
			'ip'         => $faker->ipv4,
			'country'    => 'US',
			'clicks'     => $num
		];
    }
}
