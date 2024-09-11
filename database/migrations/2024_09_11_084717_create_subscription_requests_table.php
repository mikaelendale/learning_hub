<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('subscription_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('current_plan'); // Beginner, Intermediate, Advanced
            $table->string('requested_plan'); // Intermediate, Advanced
            $table->timestamp('requested_at')->useCurrent();
            $table->boolean('read_by_student')->default(false);
            $table->boolean('read_by_admin')->default(false);
            $table->text('response')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_requests');
    }
}
