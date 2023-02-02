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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('region_id');
            $table->string('stripe_account_id')->nullable();
            $table->string('stripe_onboarded');
            $table->integer('account_status');
            $table->integer('current_roadmap_step');
            $table->integer('photo');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('gender');
            $table->string('pronouns');
            $table->string('company_name');
            $table->string('job_title');
            $table->integer('timezone');
            $table->boolean('tfa_enabled');
            $table->string('social_linked');
            $table->string('social_twitter');
            $table->string('social_instagram');
            $table->string('social_other');
            $table->text('availability_settings');
            $table->integer('logo');
            $table->string('primary_colour');
            $table->string('secondary_colour');
            $table->text('billing_address');
            $table->dateTime('last_login');
            $table->timestamps();
            $table->foreignId('region_id')->constrained('regions')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
