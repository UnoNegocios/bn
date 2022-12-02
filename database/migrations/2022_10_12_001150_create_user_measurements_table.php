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
        Schema::create('user_measurements', function (Blueprint $table) {
            $table->id();
            $table->string('triceps')->nullable(); 
            $table->string('biceps')->nullable(); 
            $table->string('suprailiaco')->nullable(); 
            $table->string('subescapular')->nullable(); 
            $table->string('pectoral')->nullable(); 
            $table->string('abdominal')->nullable(); 
            $table->string('cuadriceps')->nullable(); 
            $table->string('isquiotibial')->nullable(); 
    
            $table->string('cuello')->nullable(); 
            $table->string('brazo_rel')->nullable(); 
            $table->string('brazo_flex')->nullable(); 
            $table->string('antebrazo')->nullable(); 
            $table->string('torax')->nullable(); 
            $table->string('cintura')->nullable(); 
            $table->string('abdomen')->nullable(); 
            $table->string('cadera')->nullable(); 
            $table->string('muslo')->nullable(); 
            $table->string('pantorrilla')->nullable(); 
            $table->string('indice_masa_corporal')->nullable(); 
            $table->string('indice_cintura_cadera')->nullable(); 
    
            
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('appointment_id')->unsigned()->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments')
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
        Schema::dropIfExists('user_measurements');
    }
};
