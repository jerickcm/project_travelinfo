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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name', 150)->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('featured_image')->nullable();
            $table->mediumText('content1')->nullable();
            $table->mediumText('content2')->nullable();
            $table->mediumText('content3')->nullable();
            $table->mediumText('content4')->nullable();
            $table->mediumText('notes')->nullable();
            $table->mediumText('travel_guides')->nullable();
            $table->mediumText('url')->nullable();
            $table->longText('itinerary')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
