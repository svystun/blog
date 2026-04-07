<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AppComment>
 */
class CommentFactory extends Factory
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
	
		$types = ['discussions', 'articles'];
		$type = $types[mt_rand(0, 1)];
		
		switch ($type) {
			case "discussions":
				$id = \App\Discussion::pluck('id')->random();
				break;
			case "articles":
				$id = \App\Article::pluck('id')->random();
				break;
		}
		
		return [
			'user_id'             => $user_ids,
			'commentable_type'    => $type,
			'commentable_id'      => $id, //$commentable[$rand_id],
			'content'             => $faker->paragraph
		];
    }
}
