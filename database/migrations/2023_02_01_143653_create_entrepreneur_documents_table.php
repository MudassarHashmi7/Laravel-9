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
        Schema::create('entrepreneur_documents', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('entrepreneur_id');
//            $table->unsignedBigInteger('agent_id');
            $table->foreignId('entrepreneur_id')->constrained('users')->references('id');
            $table->foreignId('agent_id')->constrained('users')->references('id');
            $table->string('name');
            $table->text('description');
//            $table->unsignedBigInteger('document_id');
            $table->foreignId('document_id')->constrained('medias')->references('id');
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
        Schema::dropIfExists('entrepreneur_documents');
    }
};
