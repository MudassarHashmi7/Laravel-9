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
        Schema::create('scoreboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
            $table->double('revenue');
            $table->double('headcount');
            $table->double('revenue-per_employee');
            $table->double('profit_margin');
            $table->double('return_on_equity');
            $table->double('return_on_dept');
            $table->double('gross_net_burn');
//            $table->double('revenue');
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
        Schema::dropIfExists('scoreboards');
    }
};
