<?php

namespace jr\romantoint;

class IntToRoman
{
    private $romanParts =
        [
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I',
        ];

    public function convert($int)
    {
        $roman = '';

        foreach ($this->romanParts as $intPart => $romanPart)
        {
            while ($int >= $intPart)
            {
                $roman .= $romanPart;
                $int -= $intPart;
            }
        }

        return $roman;
    }
}