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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sale_type');
            $table->string('sale_status');
            $table->string('location');
            $table->date("start_date");
            $table->date("end_date");
            $table->time("start_time");
            $table->string('company_name');
            $table->string('company_website');
            $table->string('company_phone_1');
            $table->string('company_phone_2');
            $table->string('image_url');
            $table->string('terms_conditions');
            $table->string('description');
            $table->string('external_bid_url');
            $table->string('social_links');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
