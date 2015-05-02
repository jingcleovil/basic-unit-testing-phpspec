<?php

class StringCalculator
{
    public function add($stringNum)
    {
        if (! empty($stringNum)) {

            return array_sum(
                explode(",", $stringNum)
            );
        }

        return 0;
    }
}
