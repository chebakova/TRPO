<?php

Class Line
{
    public function solve($a, $b)
    {
        if ($a == 0) {
            return NULL;
        }
        return $this->X = -($b / $a);
    }

    protected $X;
}

?>