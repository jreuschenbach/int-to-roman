<?php

namespace jr\romantoint;

class RomanToInt
{
    public function convert($int)
    {
        if ($int == 4)
        {
            return 'IV';
        }

        return str_repeat('I', $int);
    }
}