<?php

namespace fv\ubadges;

class UBadges
{
    public static $dimensions = [22, 81, 22];


    public static function getDimensionValues($name, $extra = null)
    {
        $name = preg_replace('/\s+/', ' ', trim(mb_strtolower($name)));
        if ($extra !== null) {
            $name .= "\n$extra";
        }

        $hash = md5($name, true);
        return [
            ord($hash[0]) % self::$dimensions[0],
            ord($hash[1]) % self::$dimensions[1],
            ord($hash[2]) % self::$dimensions[2],
        ];
    }


    public static function getCssClasses($name, $extra = null)
    {
        $values = static::getDimensionValues($name, $extra);
        $classes = [];
        for ($i = 0; $i < 3; $i++) {
            $d = $i + 1;
            $classes[] = "ub_$d-$values[$i]";
        }
        return $classes;
    }


    public static function render($name, $extra = null, $initials = null)
    {
        if (!$initials) {
            $initials = static::getInitials($name);
        }

        return '<span class="ub '
            . implode(' ', static::getCssClasses($name, $extra))
            . '">'
            . htmlspecialchars($initials, ENT_QUOTES)
            . '</span>';
    }


    protected static function getInitials($name)
    {
        $names = preg_split('/\s+/', trim($name));

        $nr = count($names);
        if ($nr === 0) {
            throw new \LogicException('Empty name');
        }

        $first = mb_strtoupper(mb_substr($names[0], 0, 1));
        if ($nr > 1) {
            $last = mb_strtoupper(mb_substr($names[$nr - 1], 0, 1));
        } elseif (mb_strlen($names[0]) > 1) {
            $last = mb_strtolower(mb_substr($names[0], 1, 1));
        } else {
            $last = ' ';
        }
        return $first . $last;
    }
}
