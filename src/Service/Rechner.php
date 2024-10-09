<?php

namespace App\Service;

class Rechner {
    public static function add(float $x, float $y): float {
        return $x + $y;
    }
    public static function subtract(float $x, float $y): float {
        return $x - $y;
    }
    public static function multiply(float $x, float $y): float {
        return $x * $y;
    }
    public static function divide(float $x, float $y): float {
        if ($y == 0) {
            throw new RechnerException('You can\'t divide by 0');
        }

        return $x / $y;
    }
}