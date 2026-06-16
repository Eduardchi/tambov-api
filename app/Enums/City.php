<?php

namespace App\Enums;

enum City: string
{
    case Tambov = 'Тамбов';
    case Michurinsk = 'Мичуринск';
    case Morshansk = 'Моршанск';
    case Rasskazovo = 'Рассказово';
    case Uvarovo = 'Уварово';
    case Kotovsk = 'Котовск';
    case Kirsanov = 'Кирсанов';
    case Zherdevka = 'Жердевка';
    case Rzhaksa = 'Ржакса';
    case Inzhavino = 'Инжавино';
    case Pervomaiskiy = 'Первомайский';
    case Mordovo = 'Мордово';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}