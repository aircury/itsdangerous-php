<?php

namespace ItsDangerous\Support;

use DateTime;

class ClockProvider
{
    /**
     * EPOCH was 1293840000 in the forked library
     * changed to 0 to make it compatible with Python library version 1.0
     */
    public static $EPOCH = 0;
    protected static $now = null;

    public static function getDateTime()
    {
        if(static::$now === null) {
            return new DateTime();
        }
        return static::$now;
    }

    public static function getTimestamp()
    {
        $dt = static::getDateTime();
        $dtnow = $dt->getTimestamp();
        return $dtnow - self::$EPOCH;
    }

    public static function setTestNow(DateTime $dt = null)
    {
        static::$now = $dt;
    }

    public static function timestampToDate($ts)
    {
        return \DateTime::createFromFormat("U", $ts + self::$EPOCH, new \DateTimeZone("UTC"));
    }
}
