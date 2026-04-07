<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->foreignId('category_id')->nullable()->constrained('categories');
			$table->foreignId('user_id')->nullable()->constrained('users');
			$table->foreignId('last_user_id')->nullable()->constrained('users');
            $table->string('slug')->unique()->nullable();
            $table->string('title')->default('');
            $table->string('subtitle')->default('');
            $table->longText('content')->nullable();
            $table->string('page_image')->nullable();
            $table->string('meta_description')->nullable();
            $table->boolean('is_original')->default(false);
            $table->boolean('is_draft')->default(false);
            $table->integer('view_count')->unsigned()->default(0)->index();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
