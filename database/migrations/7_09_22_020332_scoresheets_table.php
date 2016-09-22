<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScoresheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoresheets', function (Blueprint $table) {
            $table->increments('id');
            /*PARTICIPANT*/
            $table->integer('participant_id')->unsigned()->nullable();
            $table->foreign('participant_id')->references('id')->on('users');
            /*JURY*/
            $table->integer('jury_id')->unsigned()->nullable();
            $table->foreign('jury_id')->references('id')->on('users');
            /*CATEGORY*/
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('category');
            /*SESSION*/
            $table->integer('session_id')->unsigned()->nullable();
            $table->foreign('session_id')->references('id')->on('sessions');
            /*other fields*/
            $table->integer('room_id');
            $table->string('notes');
            $table->date('time');
            $table->integer('presentation_material');
            $table->integer('communication_skill');
            $table->integer('achievement');
            $table->integer('personal_value');
            $table->integer('customer_care_knowledge');
            $table->integer('solution_skill');
            $table->integer('inspirational_story');
            $table->integer('total_score');
            $table->integer('coeficient_score');
            $table->decimal('total_coeficient_score');
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
        Schema::dropIfExists('scoresheets');
    }
}
