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
            $table->integer('region_id');
            $table->integer('stripe_account_id');
            $table->integer('stripe_onboarded');
            $table->boolean('account_status');
            $table->integer('current_roadmap_step');
            $table->integer('photo');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('gender');
            $table->integer('pronouns');
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
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->text('billing_address');
            $table->dateTime('last_login');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
