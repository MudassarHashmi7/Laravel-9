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
            $table->integer('entrepreneur_document');

            $table->foreignId('agent_id')->constrained('users')
                ->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('agent_id')->references('id')->on('agent_agreement');

            $table->string('name');
            $table->text('description');
            $table->foreignId('document_id')->constrained('media')
                ->onUpdate('cascade')->onDelete('cascade');
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
