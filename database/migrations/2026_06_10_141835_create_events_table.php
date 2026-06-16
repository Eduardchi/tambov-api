<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\City;
use App\Enums\EventCategory;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('title', 200);
            $table->date('date');
            $table->enum('location', City::values());
            $table->enum('category', EventCategory::values());
            $table->text('image_url');
            $table->text('description');
            $table->timestamps();

            $table->index(['date', 'category', 'location']);
            $table->fullText(['title', 'location']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};