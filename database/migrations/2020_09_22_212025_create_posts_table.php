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
            //added by default
            $table->id();
            //manually added as needed for retrieving any data from database
            $table->string('slug');
            //manually added as needed for retrieving the body from the database
            $table->text('body');
            //added by default
            $table->timestamps();
            //manually added as needed for retrieving the published at timestamp from database but this timestamp is able to be null
            $table->timestamp('published_at')->nullable();
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
