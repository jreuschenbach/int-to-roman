<?php

namespace jr\romantoint;

class RomanToInt
{
    private $romanParts =
        [
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