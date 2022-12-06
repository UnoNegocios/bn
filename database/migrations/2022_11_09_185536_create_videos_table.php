<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->boolean('downloadable')->nullable();
            $table->string('position')->nullable();
            $table->string('preview_image', 2048)->nullable();
            $table->string('duration')->nullable();
            $table->string('duration_in_seconds')->nullable();
            $table->string('permalink', 2048)->nullable();
            $table->string('status')->nullable();
            $table->json('category_ids')->nullable();
            $table->string('playback_id')->nullable();
            $table->string('file_path', 2048)->nullable();

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
        Schema::dropIfExists('videos');
    }
};
