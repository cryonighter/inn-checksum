<?php

namespace Cryonighter\InnChecksum;

class InnChecker
{
    private const WEIGHT_INDIVIDUAL = [7, 2, 4, 10, 3, 5, 9, 4, 6, 8, 0];
    private const WEIGHT_LEGAL = [2, 4, 10, 3, 5, 9, 4, 6, 8, 0];

    /**
     * @param string $inn
     *
     * @return bool
     */
    public static function check(string $inn): bool
    {
        switch (strlen($inn)) {
            case 12:
                return static::checkIndividual($inn);
            case 10:
                return static::checkLegal($inn);
            default:
                return false;
        }
    }

    /**
     * @param string $inn
     *
     * @return bool
     */
    public static function checkIndividual(string $inn): bool
    {
        if (preg_match('/^\d{12}$/', $inn)) {
            return true;
        }

        return false;
    }

    /**
     * @param string $inn
     *
     * @return bool
     */
    public static function checkLegal(string $inn): bool
    {
        if (!preg_match('/^\d{10}$/', $inn)) {
            return false;
        }

        $checksum = array_sum(
            array_map(
                function(int $innChar, int $weight): int {
                    return $innChar * $weight;
                },
                str_split($inn, 1),
                self::WEIGHT_LEGAL
            )
        );

        return $inn[9] == $checksum % 11 % 10;
    }
}
