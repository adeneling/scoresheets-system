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
            $table->string('name')->nullable();
            $table->string('parent_category')->nullable();
            $table->string('description')->nullable();
            $table->integer('presentation_material')->nullable();
            $table->integer('communication_skill')->nullable();
            $table->integer('achievement')->nullable();
            $table->integer('personal_value')->nullable();
            $table->integer('customer_care_knowledge')->nullable();
            $table->integer('solution_skill')->nullable();
            $table->integer('inspirational_story')->nullable();
            $table->integer('leadership')->nullable();
            $table->integer('tier')->nullable();
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
