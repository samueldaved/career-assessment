<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('email');
            $table->string('role');
            $table->string('gender');
            $table->string('birthplace');
            $table->date('birthday');
            $table->string('address');
            $table->string('phone');
            $table->string('department');
            $table->boolean('takenTest')->default(false);
            $table->boolean('finishedTest')->default(false);
            //$table->rememberToken();
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
