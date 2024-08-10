<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_content', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subsection_id')->constrained('subsection')->onDelete('cascade');
            $table->string('title');
            $table->json('content')->nullable();
            $table->string('video_url');
            $table->string('code_examples');
            $table->string('files');
            $table->string('external_links');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_content');
    }
};
