<?php

use App\Enums\SupportCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('support_programs', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('title', 200);
            $table->enum('category', SupportCategory::values());
            $table->string('audience', 200);
            $table->date('deadline')->nullable();
            $table->text('description');
            $table->text('image_url');
            $table->timestamps();

            $table->index('deadline');
            $table->fullText('title');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('support_programs');
    }
};