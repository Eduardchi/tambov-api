<?php

namespace App\Enums;

enum EventCategory: string
{
    case Culture = 'Культура';
    case Sport = 'Спорт';
    case Science = 'Наука';
    case Volunteering = 'Волонтёрство';
    case IT = 'IT';
    case Education = 'Образование';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}