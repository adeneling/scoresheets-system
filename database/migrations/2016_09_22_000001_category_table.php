<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('parent_category');
            $table->string('description');
            $table->integer('presentation_material');
            $table->integer('communication_skill');
            $table->integer('achievement');
            $table->integer('personal_value');
            $table->integer('customer_care_knowledge');
            $table->integer('solution_skill');
            $table->integer('inspirational_story');
            $table->integer('leadership')->nullable();
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
        Schema::dropIfExists('category');
    }
}
