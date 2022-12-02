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
        Schema::create('workout_routine_details', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('muscular_groups')->nullable();
            $table->string('duration')->nullable();
            $table->json('exercises_ids')->nullable();

            $table->bigInteger('workout_routine_id')->unsigned()->nullable();
            $table->foreign('workout_routine_id')->references('id')->on('workout_routines')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('workout_routine_details');
    }
};
