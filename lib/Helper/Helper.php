<?php
namespace lib\Helper;

class Helper
{
    /**
     * Выбирает слово с правильными окончанием после числительного.
     *
     * @param int $number число
     * @param array $words варианты склонений ['рубль', 'рубля', 'рублей']
     * @return string
     */
    public static function plural(float $number, array $words): string
    {
        return $words[($number % 100 > 4 && $number % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][min($number % 10, 5)]];
    }
}

