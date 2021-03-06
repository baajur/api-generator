<?php

namespace SoliDry\Helpers;

/**
 * Class Metrics
 * @package SoliDry\Helpers
 */
class Metrics
{
    /**
     * @return string
     */
    public static function millitime()
    {
        $microtime = microtime();
        $comps = explode(' ', $microtime);

        // Note: Using a string here to prevent loss of precision
        // in case of "overflow" (PHP converts it to a double)
        return sprintf('%d%03d', $comps[1], $comps[0] * 1000);
    }
}