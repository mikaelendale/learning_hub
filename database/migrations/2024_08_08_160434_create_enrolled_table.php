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
        Schema::create('enrolled', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subsection_id')->constrained('subsection')->onDelete('cascade');
            $table->foreignId('students_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('locked');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolled'); // Fixed table name
    }
};
