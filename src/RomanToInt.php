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
        }
        elseif ($int == 5)
        {
            $roman = 'V';
        }
        else
        {
            $roman = str_repeat('I', $int);
        }

        return $roman;
    }
}