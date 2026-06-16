<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    private const ALL_VALUES = "'Гранты','Волонтёрство','Образование','Культура','Патриотизм','Молодёжь','Спорт'";

    public function up(): void
    {
        DB::statement('ALTER TABLE news DROP CONSTRAINT IF EXISTS news_category_check');
        DB::statement('ALTER TABLE news ALTER COLUMN category TYPE varchar(100)');
        DB::statement('ALTER TABLE news ADD CONSTRAINT news_category_check CHECK (category IN (' . self::ALL_VALUES . '))');
    }

    public function down(): void
    {
        $original = "'Гранты','Волонтёрство','Образование'";
        DB::statement('ALTER TABLE news DROP CONSTRAINT IF EXISTS news_category_check');
        DB::statement("ALTER TABLE news ADD CONSTRAINT news_category_check CHECK (category IN ({$original}))");
    }
};