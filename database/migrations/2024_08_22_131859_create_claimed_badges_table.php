<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimedBadgesTable extends Migration
{
    public function up()
    {
        Schema::create('claimed_badges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('badge_id')->constrained('badges')->onDelete('cascade');
            $table->timestamp('claimed_at')->useCurrent(); // Date and time of claiming
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('claimed_badges');
    }
}
