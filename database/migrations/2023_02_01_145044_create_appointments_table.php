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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('entrepreneur_id');
            $table->foreignId('entrepreneur_id')->constrained('users')->references('id');
            $table->foreignId('appointment_type_id')->constrained('appointment_types')->references('id');
//            $table->unsignedBigInteger('agent_id');
            $table->foreignId('agent_id')->constrained('users')->references('id');
            $table->string('communication_type');
            $table->string('token');
//            $table->timestamps('start_time');
//            $table->timestamps('end_time');
//            $table->integer('total_time');
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
        Schema::dropIfExists('appointments');
    }
};
