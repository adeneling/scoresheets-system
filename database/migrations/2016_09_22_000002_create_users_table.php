<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('birthday')->nullable();
            $table->string('about_me')->nullable();
            $table->string('picture')->nullable();
            $table->string('gender')->nullable();
            $table->string('work_location')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('region')->nullable();
            $table->string('job_function')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('notes')->nullable();
            $table->string('presentation_file')->nullable();
            $table->string('qrfield')->nullable();
            $table->boolean('checking')->nullable();
            $table->boolean('has_checked_in')->nullable();
            $table->boolean('activated')->nullable();

            /* FOREIGN KEY */
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('category');
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
}
