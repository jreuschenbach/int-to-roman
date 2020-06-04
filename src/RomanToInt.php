<?php

namespace jr\romantoint;

class RomanToInt
{
    private $romanParts =
        [
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
        ];

    public function convert($int)
    {
        $roman = '';

        foreach ($this->romanParts as $intPart => $romanPart)
        {
            if ($int >= $intPart)
            {
                $roman .= $romanPart;
                $int -= $intPart;
            }
        }

        $roman .= str_repeat('I', $int);

        return $roman;
    }
}