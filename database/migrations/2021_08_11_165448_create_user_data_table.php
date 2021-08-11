<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('phone')->unique();
            $table->tinyInteger('gender')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->text('region')->nullable();
            $table->text('city')->nullable();
            $table->text('street')->nullable();
            $table->text('house')->nullable();
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('user_data');
    }
}
