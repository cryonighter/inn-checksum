<?php

namespace Cryonighter\InnChecksum;

class InnChecker
{
    private const WEIGHT_INDIVIDUAL = [3, 7, 2, 4, 10, 3, 5, 9, 4, 6, 8, 0];
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
        if (!preg_match('/^\d{12}$/', $inn)) {
            return false;
        }

        $innChars = str_split($inn);

        $checksumOne = static::getChecksum(
            array_slice($innChars, 0, 11),
            array_slice(self::WEIGHT_INDIVIDUAL, 1)
        );

        $checksumTwo = static::getChecksum($innChars,self::WEIGHT_INDIVIDUAL);

        return ($checksumOne % 11 % 10 == $inn[10]) && ($checksumTwo % 11 % 10 == $inn[11]);
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

        $checksum = static::getChecksum(
            str_split($inn),
            self::WEIGHT_LEGAL
        );

        return $inn[9] == $checksum % 11 % 10;
    }

    /**
     * @param array $innChars
     * @param array $weights
     *
     * @return int
     */
    protected static function getChecksum(array $innChars, array $weights): int
    {
        return array_sum(
            array_map(
                function (int $innChar, int $weight): int {
                    return $innChar * $weight;
                },
                $innChars,
                $weights
            )
        );
    }
}
