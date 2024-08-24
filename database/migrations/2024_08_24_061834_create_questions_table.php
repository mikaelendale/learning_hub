<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_id'); // Use quiz_id instead of course_id
            $table->integer('point');
            $table->text('question');
            $table->integer('order');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade'); // Assuming the table name is quizzes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
