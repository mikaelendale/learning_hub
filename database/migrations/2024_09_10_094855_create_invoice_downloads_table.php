<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_downloads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); // Tracks which student downloaded the invoice
            $table->string('invoice_number'); // Stores invoice number or unique identifier
            $table->dateTime('downloaded_at'); // Stores the download timestamp
            $table->string('ip_address'); // IP address for tracking purposes
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_downloads');
    }
}
