<?php

use PHPUnit\Framework\TestCase;
use jr\romantoint\RomanToInt;

class RomanToIntTest extends TestCase
{
    private $convertValues = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
    ];

    public function testConvert()
    {
        $romanToInt = new RomanToInt();

        foreach ($this->convertValues as $int => $roman)
        {
            $this->assertEquals($roman, $romanToInt->convert($int));
        }
    }
}
