<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterMemberDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master-member', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('category');
            $table->string('nik');
            $table->string('name')->nullable();
            $table->string('unit_type')->nullable();
            $table->string('unit_name')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('gender')->nullable();
            $table->integer('room_code')->nullable();
            $table->string('region')->nullable();
            $table->integer('area')->nullable();
            $table->string('email')->nullable();
            $table->string('size_poloshirt')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('birthday')->nullable();
            $table->string('join_date')->nullable();
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
        Schema::dropIfExists('master-member');
    }
}

