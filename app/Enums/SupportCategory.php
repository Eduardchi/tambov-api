<?php

namespace App\Enums;

enum SupportCategory: string
{
    case Grants = 'Гранты';
    case Scholarships = 'Стипендии';
    case Housing = 'Жильё';
    case Employment = 'Трудоустройство';
    case Education = 'Обучение';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}