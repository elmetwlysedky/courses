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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('requirements')->nullable();
            $table->string('video_intro')->nullable();
            $table->boolean('free');//0 = free  , 1 = not free
            $table->boolean('active');//0 = yes  , 1 = no
            $table->longText('description');
            $table->enum('gender',['male','female','all']);
            $table->decimal('price',10,4);
            $table->string('image');
            $table->foreignId('teacher_id')->constrained('teachers')->cascadeOnDelete();

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
        Schema::dropIfExists('courses');
    }
};
