<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_users', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'token');
            $table->string(column: 'refresh_token');
            $table->dateTime(column: 'token_expried');
            $table->dateTime(column: 'refresh_token_expried');
            $table->bigInteger(column: 'user_id');
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
        Schema::dropIfExists('session_users');
    }
}
