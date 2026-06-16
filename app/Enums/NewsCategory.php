<?php

namespace App\Enums;

enum NewsCategory: string
{
    case Grants       = 'Гранты';
    case Volunteering = 'Волонтёрство';
    case Education    = 'Образование';
    case Culture      = 'Культура';
    case Patriotism   = 'Патриотизм';
    case Youth        = 'Молодёжь';
    case Sport        = 'Спорт';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}