<?php

namespace jr\romantoint;

class RomanToInt
{
    public function convert($int)
    {
        $roman = '';

        if ($int == 4)
        {
            $roman = 'IV';
            $int -= 4;
        }
        elseif ($int == 9)
        {
            $roman = 'IX';
            $int -= 9;
        }
        elseif ($int >= 5)
        {
            $roman = 'V';
            $int -= 5;
        }

        $roman .= str_repeat('I', $int);

        return $roman;
    }
}