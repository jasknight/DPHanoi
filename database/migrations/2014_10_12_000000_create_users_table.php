<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('identity_card');
            $table->string('password');
            $table->date('birthday');
            $table->enum('gender', ['male', 'female']);
            $table->string('address');
            $table->string('academic_level');
            $table->string('specialize');
            $table->boolean('labor_ability');
            $table->string('employment_status')->nullable();
            $table->integer('income')->default(0);
            $table->integer('status')->comment('0 is not approved, 1 is approved');
            $table->rememberToken();
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
