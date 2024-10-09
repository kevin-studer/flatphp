<?php

namespace App\Tests\Service;

use App\Service\RechnerException;
use PHPUnit\Framework\TestCase;
use App\Service\Rechner;

/**
 * @covers Rechner
 */
class RechnerTest extends TestCase 
{

    public function testAddition(): void
    {
        $result = Rechner::add(1, 3);

        self::assertEquals(4, $result);
    }

    public function testSubtraction(): void
    {
        $result = Rechner::subtract(1, 3);

        self::assertEquals(-2, $result);
    }

    public function testMultiplication(): void
    {
        $result = Rechner::multiply(1, 3);

        self::assertEquals(3, $result);
    }

    public function testDivision(): void
    {
        $result = Rechner::divide(2, 2);

        self::assertEquals(1, $result);
    }

    public function testDivisionByZero(): void
    {
        self::expectException(RechnerException::class);

        Rechner::divide(1, 0);
    }
}