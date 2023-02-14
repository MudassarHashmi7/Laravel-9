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
            $table->foreignId('entrepreneur_id')->constrained('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('appointment_type_id');
            $table->foreignId('agent_id')->constrained('users')
                ->onDelete('cascade')->onDelete('cascade');
            $table->string('communication_type');
            $table->string('token');
//            $table->timestamp('start_time');
//            $table->timestamp('end_time');
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
