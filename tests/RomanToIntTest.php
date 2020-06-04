<?php

use PHPUnit\Framework\TestCase;
use jr\romantoint\RomanToInt;

class RomanToIntTest extends TestCase
{
    public function testConvert()
    {
        $romanToInt = new RomanToInt();
        $this->assertEquals('I', $romanToInt->convert(1));
    }
}
