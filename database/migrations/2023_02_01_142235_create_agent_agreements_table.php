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
        Schema::create('agent_agreements', function (Blueprint $table) {
            $table->id();
          //  $table->unsignedBigInteger('agent_id');
            $table->foreignId('agent_id')->constrained('users')->references('id');
            $table->double('fee_percentage');
            $table->text('description');
//            $table->foreignId('document_id')->constrained();
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
        Schema::dropIfExists('agent_agreements');
    }
};
