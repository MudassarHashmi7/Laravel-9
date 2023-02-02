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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('payee_id')->constrained()->nullable();
//            $table->foreignId('recipient_id')->constrained()->nullable();
            $table->foreignId('appointment_id')->constrained('appointments')->references('id');
            $table->string('type');
            $table->string('status');
            $table->double('tax');
            $table->double('total');
            $table->text('billing_address');
            $table->text('description');

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
        Schema::dropIfExists('invoices');
    }
};
