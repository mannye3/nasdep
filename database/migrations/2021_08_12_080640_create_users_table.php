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
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->char('gender', 1);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone');
            $table->date('dob')->nullable();
            $table->unsignedInteger('country_id')->default(1);
            $table->unsignedInteger('state_id');
            $table->string('picture')->default('default/user1.png');
            $table->string('type')->default('external');
            $table->tinyInteger('authorized')->default(0);
            $table->tinyInteger('verified')->default(0);
            $table->string('verification_token')->nullable();
            $table->tinyInteger('suspended')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
