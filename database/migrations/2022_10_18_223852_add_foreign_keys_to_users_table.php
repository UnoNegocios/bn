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
        Schema::table('users', function (Blueprint $table) {

            $table->bigInteger('training_plan_id')->unsigned()->nullable();
            $table->foreign('training_plan_id')->references('id')->on('training_plans')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('trainer_id')->unsigned()->nullable();
            $table->foreign('trainer_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->dropColumn('training_plan_id');
            $table->dropColumn('trainer_id');

        });
    }
};
