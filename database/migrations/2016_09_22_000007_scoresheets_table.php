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
            $table->string('participant_name')->nullable();
            $table->integer('participant_area')->nullable();
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
            $table->integer('presentation_material');
            $table->string('presentation_material_note')->nullable();
            $table->integer('communication_skill');
            $table->string('communication_skill_note')->nullable();
            $table->integer('achievement');
            $table->string('achievement_note')->nullable();
            $table->integer('personal_value');
            $table->string('personal_value_note')->nullable();
            $table->integer('customer_care_knowledge');
            $table->string('customer_care_knowledge_note')->nullable();
            $table->integer('solution_skill');
            $table->string('solution_skill_note')->nullable();
            $table->integer('inspirational_story');
            $table->string('inspirational_story_note')->nullable();
            $table->integer('leadership')->nullable();
            $table->string('leadership_note')->nullable();
            $table->string('notes')->nullable();
            $table->integer('room_id')->nullable();          
            $table->date('time')->nullable();
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
