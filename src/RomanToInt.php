<?php

namespace jr\romantoint;

class RomanToInt
{
    private $romanParts =
        [
            20 => 'XX',
            19 => 'XIX',
            18 => 'XVIII',
            17 => 'XVII',
            16 => 'XVI',
            15 => 'XV',
            14 => 'XIV',
            13 => 'XIII',
            12 => 'XII',
            11 => 'XI',
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