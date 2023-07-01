<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('mbtiResult')->nullable();
            $table->string('sdsResult')->nullable();
            $table->string('discResult')->nullable();
            //use to draw line chart disc result
            $table->json('discPlusCount')->nullable();
            $table->json('discMinusCount')->nullable();
            $table->json('discDifferenceCount')->nullable();
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
        Schema::dropIfExists('test_results');
    }
}
