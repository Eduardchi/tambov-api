<?php

use App\Enums\NewsCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('title', 200);
            $table->date('date');
            $table->enum('category', NewsCategory::values());
            $table->text('description');
            $table->text('image_url');
            $table->timestamps();

            $table->index('date');
            $table->fullText('title');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};