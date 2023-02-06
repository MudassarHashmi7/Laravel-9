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
        Schema::create('appointment_types', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('agent_id');
            $table->foreignId('agent_id')->constrained('users')->references('id');
            $table->string('communication_types');
            $table->string('name');
            $table->foreignId('image_id')->constrained('medias')->references('id');
            $table->text('description');
            $table->text('booking_message');
            $table->integer('length');
            $table->double('price');
            $table->integer('sort_order');
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
        Schema::dropIfExists('appointment_types');
    }
};
