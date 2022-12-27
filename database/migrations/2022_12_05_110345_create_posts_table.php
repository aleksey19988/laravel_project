<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title')->comment('Заголовок');
            $table->text('content')->comment('Контент');
            $table->string('image')->nullable()->comment('Изображение');
            $table->unsignedInteger('likes')->nullable()->comment('Лайки');
            $table->boolean('is_published')->default(1)->comment('Пост опубликован');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
