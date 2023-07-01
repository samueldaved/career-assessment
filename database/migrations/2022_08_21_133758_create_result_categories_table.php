<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->json('strength')->nullable();
            $table->json('weakness')->nullable();
            $table->json('goals')->nullable();
            $table->json('difficulties')->nullable();
            $table->json('leadershipCharacteristics')->nullable();
            $table->json('commonCombination')->nullable();
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
        Schema::dropIfExists('result_categories');
    }
}
