<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('email')->unique();
            $table->string('phone');
            $table->foreignId('country_id')->constrained('countries')->cascadeOnDelete();
            $table->string('avatar') ->nullable();
            $table->boolean('is_teacher'); // 0 = student , 1 = teacher
            $table->boolean('gender');// 0 = "female" , 1 = "male"
            $table->string('degree')->nullable();
            $table->string('employment')->nullable();
            $table->string('cv')->nullable();
            $table->string('specialization')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};
