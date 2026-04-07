<?php

namespace Database\Seeders;

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Tag::class, 5)->create();
		Tag::factory()->count(5)->create();
    }
}
